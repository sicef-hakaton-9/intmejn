import requests
from bs4 import BeautifulSoup
naziv_fajla = "novak.php"
# URL sajta koji želite da scrapujete
url = "https://tickets.rs/city/nis_8919"

# Slanje HTTP GET zahteva za dobijanje HTML sadržaja sajta
response = requests.get(url)

# Provera da li je zahtev uspeo
if response.status_code == 200:
    # Kreiranje BeautifulSoup objekta za analizu HTML-a
    soup = BeautifulSoup(response.text, 'html.parser')

    # Pronalaženje svih elemenata sa class-om "date-box"
    date_boxes = soup.find_all(class_="date-box")

    # Pronalaženje svih <h5> tagova na stranici
    h5_elements = soup.find_all('h5')

    # Pronalaženje svih <a> tagova sa href atributom koji počinje sa "/event/"
    event_links = soup.find_all('a', href=True)

    # Inicijalizacija brojača za id broj
    id_counter = 1

    # Lista za čuvanje Event::create poziva
    event_links_tmp = []

    # Prethodni prolaz kroz linkove za filtriranje
    filtered_links = [link for link in event_links if "/event/" in link['href']]

    # Prolazak kroz prethodno filtrirane linkove
    for date_box, h5, link in zip(date_boxes, h5_elements, filtered_links):
        # Formiranje Event::create poziva za svaki element
        create_call = f"Event::create(["
        create_call += f"'id' => {id_counter},"
        create_call += f"'name' => '{h5.text}',"
        create_call += f"'date-box' => '{date_box.text}',"
        create_call += f"'link' => 'https://tickets.rs{link['href']}'"
        create_call += f"]);"

        # Dodavanje poziva u listu
        event_links_tmp.append(create_call)

        # Inkrementacija brojača za id
        id_counter += 1

    # Ispisivanje Event::create poziva iz liste
    for create_call in event_links_tmp:
        print(create_call)

    # Učitajte sadržaj PHP fajla
    with open(naziv_fajla, "r", encoding="utf-8") as file:
        php_code = file.read()

    # Pretraga linije sa komentarom //ovde ide python
    target_comment = "//ovde ide python"
    lines = php_code.split("\n")

    # Pronađite redni broj linije sa traženim komentarom
    target_line = None
    for i, line in enumerate(lines):
        if target_comment in line:
            target_line = i
            break

    # Generišite Event::create pozive i dodajte ih na traženu liniju
    if target_line is not None:
        # Formirajte Event::create pozive kao string
        event_calls = "\n".join(event_links_tmp)

        # Dodajte Event::create pozive na traženu liniju
        lines.insert(target_line, event_calls)

        # Ažurirajte sadržaj PHP fajla
        updated_php_code = "\n".join(lines)

        # Sačuvajte ažurirani PHP fajl
        with open(naziv_fajla, "w", encoding="utf-8") as file:
            file.write(updated_php_code)

    else:
        print("Nije pronađena linija sa komentarom //ovde ide python u PHP fajlu.")
else:
    print("Neuspešan zahtev. Status koda: " + str(response.status_code))
