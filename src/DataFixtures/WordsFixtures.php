<?php

namespace App\DataFixtures;

use App\Entity\Language;
use App\Entity\Words;
use App\Repository\LanguageRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class WordsFixtures extends Fixture
{
    private LanguageRepository $languageRepository;

    public function __construct(LanguageRepository $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $language = $this->languageRepository->findBy(['shorthand' => 'nl'])[0];

        foreach ($this->wordList() as $wordText) {
            $words = new Words();
            $words->setText($wordText);
            $words->setLanguage($language);
            $manager->persist($words);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            LanguageFixtures::class
        ];
    }

    private function wordList(): array
    {
        return [
            "pizza",
            "Jumbo",
            "Pasta",
            "Philips",
            "Apple",
            "Banaan",
            "Jack Sparrow",
            "Trein",
            "Zomer",
            "’s-Hertogenbosch",
            "13 reasons why",
            "Ajax",
            "Albert Heijn",
            "André kuipers",
            "Anita meyer",
            "Ariana Grande",
            "Bakkerij",
            "Benzinestation",
            "Bill Gates",
            "Van Halen",
            "Billie Eilish",
            "Boes Boes",
            "Bosmier",
            "Cardioloog",
            "Carolina Dijkhuizen",
            "Casino",
            "Chantal Janzen",
            "Charlie Chaplin",
            "Coca Cola",
            "Manneke Pis",
            "Covid-19",
            "De fabeltjeskrant",
            "De rijdende rechter",
            "Dikkie Dik",
            "Dommel",
            "Donald Duck",
            "Downton Abbey",
            "Dr. Phil",
            "Drenthe",
            "Duitsland",
            "Dunne darm",
            "Eiffeltoren",
            "Expeditie Robinson",
            "Famke Janssen",
            "FC de Kampioenen",
            "FC Twente",
            "Feyenoord",
            "Finding Dory",
            "Frank en Frey",
            "Frank Visser",
            "Gaastra",
            "Gezondheidszorg",
            "Gijs Staverman",
            "Giovanni van Bronckhorst",
            "Goede Tijden Slechte Tijden",
            "Greys Anatomy",
            "Harry Potter",
            "Hello Kitty",
            "Inspector Gadget",
            "James Stewart",
            "James Watt",
            "Jeroen Spitzenberg",
            "Jim Bakkum",
            "Johan Cruijff",
            "John West",
            "Johnny Bravo",
            "Johny Depp",
            "Jorik Scholten",
            "Julius Caesar",
            "Katja Schuurman",
            "Kees en Co",
            "Kees van der Spek",
            "Kim Feenstra",
            "Kim-Lian van der Meij",
            "Koningin Maxima",
            "Koningsdag",
            "Lee Towers",
            "Leiden",
            "Lil Kleine",
            "Lost",
            "Lubach",
            "Luizenleven",
            "Making a murderer",
            "Mark Rutte",
            "Mars",
            "Mercedes",
            "Micheal Douglas",
            "Mississippi",
            "Mulan",
            "Napoleon",
            "Nier",
            "Palermo",
            "Pasen",
            "Peking",
            "Pluimvee",
            "Renault",
            "Ron Beton",
            "Word Wide Web",
            "Marly van der Velden",
            "RTL Late Night",
            "Schouderklopje",
            "Shrek",
            "Skelet",
            "Superworm Jim",
            "Swedish House mafia",
            "Teletubbies",
            "Tesla",
            "The incredibles",
            "The Lego Movie",
            "The Rain",
            "The Sinner",
            "The Sopranos",
            "Toilet",
            "Tom en Jerry",
            "Google",
            "Toren van Pisa",
            "Toy Story",
            "Uber",
            "Under the Dome",
            "Urk",
            "Vitesse",
            "Vogelbekdier",
            "Volkswagen",
            "Volvo",
            "Walt Disney",
            "White Collar",
            "Ice Age",
            "Willlem Alexander",
            "Laadpaal",
            "Wolter Kroes",
            "Wreck-it Ralph",
            "Zenuwen",
            "Ziggo Dome",
            "Zoetjes",
            "Jochem Meyer",
            "Timboektoe",
            "Panorama",
            "Het Holland Festival",
            "De Koning der Nederlanden",
            "Veronica",
            "Noord Korea",
            "Nicolette Kluiver",
            "Jan, Jans en de Kinderen",
            "Prinses Beatrix",
            "Nutella",
            "JungleBook",
            "De Magere Brug",
            "Heintje",
            "Oud en Nieuw",
            "Hero",
            "Camaron Diaz",
            "Hero",
            "Het Achterhuis",
            "Frans Timmermans",
            "Blokker",
            "Schaken",
            "Wallonie",
            "Huub Stapel",
            "Te land, ter zee en in de lucht",
            "Willem van Oranje",
            "Smarties",
            "Harderwijk",
            "Old Macdonald had a farm",
            "Floortje Dessing",
            "Ferrari",
            "Het Vondelpark",
            "Tien voor Taal",
            "Kim Holland",
            "Jimi Hendrix",
            "Het vrijheidsbeeld",
            "Georgina Verbaan",
            "Weight Watchers",
            "Minoes",
            "Whitney Houston",
            "Tom en Jerry",
            "Het Noorder dierenpark",
            "Katie Holmes",
            "Dr. Bibber",
            "Karl Marx",
            "Zandvoort",
            "Christina Aguilera",
            "Europacar",
            "The Incredibles",
            "J.R.R. Tolkien",
            "Lego",
            "Chicago",
            "Xander de Buisonje",
            "De Zilvervloot",
            "Jan Bos",
            "Giel Beelen",
            "Oslo",
            "Jurrasic Park",
            "Willie Wortel",
            "David Hasselhoff",
            "New York",
            "RTL Boulevard",
            "Cosmopolitan",
            "Tygo Gernandt",
            "Aerosmith",
            "Zweden",
            "Pictionary",
            "Sinds een dag of Twee",
            "Mario Been",
            "Urbanus",
            "Noord-Holland",
            "Het Jeugdjournaal",
            "Chevrolet",
            "NEC",
            "Gwen Stefani",
            "Het EK Voetbal",
            "De Vriendenloterij",
            "Koreatie",
            "Sex and the City",
            "John Wayne",
            "Julia Roberts",
            "Het Suezkanaal",
            "Nintendo",
            "Ja zuster, Nee zuster",
            "Moskou",
            "De Dikke van Dale",
            "Albert Verlinde",
            "The Black Eyed Peas",
            "Jules Verne",
            "Ryan Reynolds",
            "Notre Dame",
            "Internet Explorer",
            "Tweede Pinksterdag",
            "De NOS",
            "Herman van Veen",
            "Costa del Sol",
            "Flevo Festival",
            "Frankenstein",
            "Kees tol",
            "Wie is de Mol",
            "Braille",
            "Prince",
            "Litouwen",
            "Tarzan",
            "Vara",
            "BNN",
            "Galgje",
            "Mies Bouwman",
            "Doutzen Kroes",
            "Disneyland Parijs",
            "Nostradamus",
            "Kelloggs",
            "De Bijlmerbajes",
            "Frits Wester",
            "De Noordpool",
            "AZ",
            "Taylor Swift",
            "Zumba",
            "De Swastika",
            "Johnny Depp",
            "Almere",
            "De Gouden Loekie",
            "Xerox",
            "Attila de Hun",
            "Facebook",
            "Brad Pitt",
            "Donald Duck",
            "Hansaplast",
            "Valkenburg",
            "Wim Kok",
            "Epke Zonderland",
            "Haribo",
            "De Mont Blanc",
            "Waldermar Torenstra",
            "Pretty Woman",
            "Nijntje",
            "Blackjack",
            "Enrique Iglesias",
            "Boedapest",
            "Four weddings and a funeral",
            "West Europa",
            "Dick Advocaat",
            "Eigen huis en Tuin",
            "De Marseillaise",
            "Amy Winehouse",
            "Volkswagen",
            "BMW",
            "Renault",
            "De Rolling Stones",
            "Oxford",
            "De FNV",
            "Hamsteren",
            "Ebay",
            "Marktplaats",
            "Roland Garros",
            "Pandora",
            "Lee Towers",
            "Delfts Blauw",
            "Bart Simpson",
            "Woensdrecht",
            "Steven Seagal",
            "South Park",
            "Walibi",
            "Angela Merkel",
            "Brexit",
            "Budweiser",
            "De Biesbosch",
            "Tijl Beckand",
            "Intercity",
            "Dallas",
            "Sting",
            "Jan Mulder",
            "Toen was geluk heel gewoon",
            "Fred Rutten",
            "Mark Rutte",
            "50 cent",
            "Madurodam",
            "De hells angels",
            "Wii",
            "Berlage",
            "Anita Meyer",
            "Zuid Amerika",
            "Rudolph the red-nosed reindeer",
            "Artsen zonder Grenzen",
            "Seal",
            "Bert van Marwijk",
            "Ruud van Nistelrooy",
            "San Fransisco",
            "Het Lagerhuis",
            "Cheryl Cole",
            "Silence of the Lambs",
            "Roodkapje",
            "De watersnoodramp",
            "EDAM",
            "Mozes",
            "Partick Lodiers",
            "Tokio",
            "Herman de Blijker",
            "CSI: New York",
            "Jonas en de Walvis",
            "Kluun",
            "John Travolta",
            "Den Helder",
            "Goodyear",
            "NCIS",
            "Het Oktoberfest",
            "Het Rode Kruis",
            "Ronald de boer",
            "Bristol",
            "De Zwarte Zee",
            "Franklin D. Roosevelt",
            "C&A",
            "Miley Cyrus",
            "Munchen",
            "De G-8",
            "Alles is liefde",
            "Eerste Kerstdag",
            "Finland",
            "Nuon",
            "The X-Files",
            "Dick Maas",
            "De oscars",
            "Venetie",
            "Jamai",
            "De alternatieve elfstedentocht",
            "Idols",
            "Grolsch",
            "Het Midden-oosten",
            "Tinkerbell",
            "Gordon Ramsey",
            "Suriname",
            "KRO",
            "The Godfather",
            "Adele",
            "Hoogovens",
            "Het Vaticaan",
            "Bic Mac",
            "Ice Age",
            "Bokma",
            "Keanu Reeves",
            "De Volkskrant",
            "Patty Brard",
            "Duckstad",
            "Hoog Catharijne",
            "Vijftig Tinten Grijs",
            "Sint Nicolaas",
            "Kerstman",
            "Mentos",
            "Het Palijs op de Dam",
            "So you think you can dance",
            "Reese Witherspoon",
            "Leonardo Da vinci",
            "Rockey",
            "Skoda",
            "Apeldoorn",
            "Teun de Nooijer",
            "Eindhoven",
            "Helmond",
            "Deurne",
            "Liessel",
            "Arnhem",
            "Marianne Vos",
            "Vledder",
            "Koning Leeuwenhart",
            "Bruce Lee",
            "Louis van Gaal",
            "Tros",
            "De hoge Veluwe",
            "Shakira",
            "Een vlucht Regenwulpen",
            "Sneeuwwitje",
            "The Great Barrier reef",
            "Airbus",
            "Jan Klaasen",
            "Bonnie St. Claire",
            "Jennifer Aniston",
            112,
            "Van Nelle",
            "Poker Face",
            "Hiroshima",
            "De mona lisa",
            "Tenerife",
            "Het KNMI",
            "Thank you for the music",
            "John van den heuvel",
            "Titanic",
            "Ashton Kutcher",
            "Driekoningen",
            "Florida",
            "Robert Gesink",
            "V&D",
            "De Bijbel",
            "De Koran",
            "Iron man",
            "Quebec",
            "George Michael",
            "Twente",
            "Scherlock Holmes",
            "Zeeman",
            "Buienradar",
            "Rembrandt",
            "De pyreneeen",
            "Nieuwe Revu",
            "Steven Spielberg",
            "De haas en de schidpad",
            "Ford",
            "De Paus",
            "Babe",
            "Frans Duijts",
            "Versailles",
            "Drenthe",
            "Alfa Remoeo",
            "Ado Den Haag",
            "Ajax",
            "De Hulk",
            "PSV",
            "Arnon Grunberg",
            "Greta",
            "Nance",
            "De Himalaya",
            "Fristi",
            "Tomb Raider",
            "Coca Cola",
            "Pepsi",
            "Lazarus",
            "Kruidvat",
            "Kopenhagen",
            "Hollands Got Talent",
            "Leontien van Moorsel",
            "Lanny Kravits",
            "De kleine zeemeermin",
            "Sprite",
            "Den Bosch",
            "Bert Visscher",
            "van Dik Hout",
            "Parijs",
            "Santa Claus",
            "Duivel",
            "Het land van maas en waal",
            "De orient-express",
            "Lewis Hamilton",
            "Holland",
            "Greenpeace",
            "Lucky Luke",
            "Wonderbra",
            "Mohammed Ali",
            "Dries Roelvink",
            "Star Trek",
            "Star Wars",
            "Cauberg",
            "Schiphol",
            "De Toppers",
            "Joost van den Vondel",
            "Playboy",
            "De Apenheul",
            "Garfield",
            "Bryan Adams",
            "De Marathon Rotterdam",
            "Afgelast",
            "Californie",
            "Patience",
            "De navo",
            "Spa",
            "Mexico-stad",
            "Kate Moss",
            "Philiip Cocu",
            "Vrijheidsbeeld",
            "Twin Towers",
            "Fietsbel",
            "Fortnite",
            "GGD",
            "Vaccinatie"
        ];
    }
}
