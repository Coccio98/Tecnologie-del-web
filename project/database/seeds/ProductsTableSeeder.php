<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Sony MDR-ZX310 Cuffie On-Ear',
                'price' => '25.00',
                'summary' =>'Sony MDR-ZX310 Cuffie, Blu',
                'description'=>'Le cuffie hanno un design leggero e pieghevole per la ottima portabilità per la tua musica.
                                    I padiglioni auricolari sono imbottiti per la ottima comodità di ascolto. Il cavo ha la lunghezza di 1.2 m.',
                'details'=>'Peso articolo	127 g
                                Dimensioni prodotto	15 x 5 x 20 cm',
                'sale'=>'10',
                'brand_id' => '1',
                'subcategory_id' =>'13',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'4',
                'selling_number'=> '5'
            ],
            [
                'name'=>'Samsung Auricolari',
                'price' => '5.99',
                'summary' =>'Samsung Originale Bianco EHS64AVFWE Auricolari/Cuffie/Vivavoce Kit/Cuffie Stereo 3.5 mm Microfono',
                'description'=>'Se perde il vecchio cuffie o hanno semplicemente smesso di funzionare? Non temete perché ora è possibile acquistare da un marchio nuovo paio di cuffie supportato da un connettore jack 3.5 mm.
                                Se si desidera utilizzare come vivavoce kit o come cuffie mentre siete in viaggio per lavorare sul Bus, per l\' allenamento in palestra o semplicemente parlare al telefono.
                                Cuffie progettate per adattarsi perfettamente all\' orecchio e fornire comfort e un\' ottima qualità del suono.
                                gestisci le tue chiamate e musica con bottoni realizzato appositamente.
                                Grazie al connettore jack 3.5 mm queste cuffie sono disponibili per l\' uso con qualsiasi altro dispositivo da 3.5 mm che permette di utilizzare in diversi dispositivi che possono avere nella vostra casa come iPad, tablet.
                                Perfetto per la musica, pensati per te.',

                'details'=>'Peso articolo 18,1 g
                            Numero modello articolo: EHS64AVFWE',
                'sale'=>'0',
                'brand_id' => '2',
                'subcategory_id' =>'14',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'5',
                'selling_number'=> '12'
            ],
            [
                'name'=>'HUAWEI MateBook D 15.6" Laptop',
                'price' => '649.00',
                'summary' =>'HUAWEI MateBook D 15.6" Laptop, Processore AMD Ryzen 5 3500U, 8 GB RAM, 256 GB SSD, Schermo FullView 1080P FHD, Collaborazione multi-schermo, Sensore impronte digitali, Windows 10 Home, Argento',
                'description'=>'Design estetico:display fullview, con un rapporto schermo-corpo dell\' 87%.esperienza di visione immersiva offerta da un display antiriflesso con proporzioni 16:9.
                                Corpo metallico con un tocco futuristicouno spessore di 16.9 mmtecnologia innovativa：amd ryzen5 3500u, con scheda grafica radeon vega 8le ventole shark fin 2.0 rendono la dissipazione del calore più silenziosa ed efficace.
                                expandable storage with an ssd+hdd supports faster response speed and larger storagela memoria endibile con ssd+hdd supporta una velocità di risposta più elevata e una memoria più ampia.
                                il caricabatterie USB-c compatto supporta la ricarica rapidaesperienza smart:collaborazione multi-schermo per facilitare il lavoro e la vita.
                                sensore d\'impronte digitali per accensione e accesso velocidisplay certificato tüv rheinland per proteggere gli occhi riducendo la luce blufotocamera a scomparsa per un miglior controllo.',

                'details'=>'Peso articolo	2,3 Kg
                            Dimensioni del collo	47,2 x 27,8 x 7 cm',
                'sale'=>'30',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'5',
                'selling_number'=> '23'
            ],
            [
                'name'=>'Notebook Acer pc portatile',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '4',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '12'
            ],[
                'name'=>'Xiaomi Redmi Note 8',
                'price' => '175.00',
                'summary' =>'Xiaomi Redmi Note 8 Smartphone,4GB 64GB Mobilephone,Schermo Intero Da 6,3",Processore Octa Core Snapdragon 665,Quad Camera(48mp + 8mp + 2mp + 2mp) Versione Globale (Nero)',
                'description'=>'Processore a otto core Qualcomm Snapdragon 665
                                Frequenza massima 2,0 GHz
                                Processore grafico AdrenoTM 610
                                Motore di intelligenza artificiale AIE di terza generazione Qualcomm',
                'details'=>'Peso articolo	458 g
                            Dimensioni del collo	17,2 x 9 x 5,4 cm',
                'sale'=>'5',
                'brand_id' => '5',
                'subcategory_id' =>'1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'3.5',
                'selling_number'=> '7'
            ],

            [
                'name'=>'Notebook Asus pc portatile',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'3',
                'selling_number'=> '24'
            ],[
                'name'=>'Notebook Jessica',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'1',
                'selling_number'=> '1'
            ],[
                'name'=>'Notebook Andrea',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '1'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'iPhone SE (64GB)',
                'price' => '499.00',
                'summary' =>'Nuovo Apple iPhone SE (64GB) - bianco',
                'description'=>'Display Retina HD da 4,7 pollici con True Tone capacità: 64GB, 128 GB, 256GB, Resistente all’acqua, Design in vetro e alluminio resistente all’acqua e alla polvere (rating IP67), Videocamera FaceTime HD (foto da 7MP) con HDR automatico, Fotocamera anteriore : Videocamera FaceTime HD (foto da 7MP) con HDR automatico, Batteria e alimentazione',

                'details'=>'Peso articolo	200 g',
                'sale'=>'10',
                'brand_id' => '6',
                'subcategory_id' =>'3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '14'
            ],[
                'name'=>'iPhone 11 (64GB)',
                'price' => '839.00',
                'summary' =>'Apple iPhone 11 (64GB)',
                'description'=>'Resistente alla polvere e all\'acqua (2 metri fino a 30 minuti, ip68), Sistema a doppia fotocamera da 12mp (ultra-grandangolo e grandangolo) con modalità notte, modalità ritratto e registrazione video 4k fino a 60 fps, Fotocamera anteriore truedepth da 12mp con modalità ritratto, registrazione video 4k e slow‐motion, Face id per l\'autenticazione sicura e apple pay, Chip a13 bionic con neural engine di terza generazione, Compatibile con la ricarica veloce, Ricarica wireless',

                'details'=>'Peso articolo	191 g',
                'sale'=>'15',
                'brand_id' => '6',
                'subcategory_id' =>'3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '24'
            ],[
                'name'=>'HUAWEI MateBook D 15.6" Laptop',
                'price' => '618.00',
                'summary' =>'HUAWEI MateBook D 15.6" Laptop, Processore AMD Ryzen 5 3500U, 8 GB RAM, 256 GB SSD, Schermo FullView 1080P FHD, Collaborazione multi-schermo, Sensore impronte digitali, Windows 10 Home',
                'description'=>'Huawei matebook d 15 ha un display fullview da 15.6 pollici e uno spessore di 16.9mm; con una potente architettura di sistema e capacità di software, il laptop offre lo schermo più grande e il peso più leggero possibile per un laptop delle sue dimensioni, La collaborazione multi-schermo facilità l\'interazione tra smartphone e il nuovo matebook d 15, permettendoti di proiettare il tuo telefono sul laptop; questo non solo ti permette di usare le app dello smartphone e modificare i files sul telefono dal laptop, ma anche di spostare i file semplicemente trascinandoli, Puoi accendere e accedere facilmente al tuo matebook d 15 senza inserire alcuna password semplicemente premendo il tasto di accensione, che integra un sensore di impronte digitali, l\'aumentata efficienza di amd ryzen 5 3500u rende questo laptop ideale per l\'utilizzo in una varietà di scenari tra ufficio e giochi; il nuovo dissipatore a s facilita la dispersione del calore e il flusso d\'aria, aumentando significativamente la capacità del laptop di dissipare il calore, Matebook d 15 è dotato di un caricabatterie USB tipo c delle stesse dimensioni circa di un caricabatterie per telefoni; puoi usarlo per caricare sia il tuo matebook che il tuo smartphone huawei; il caricabatterie supporta la protezione da surriscaldamento e, se necessario, interrompe automaticamente l\'alimentazione per garantire la sicurezza',

                'details'=>'Peso articolo	800 g',
                'sale'=>'0',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '12'
            ],[
                'name'=>'DILC Airo Pc Desktop Intel',
                'price' => '229.77',
                'summary' =>'DILC Airo Pc Desktop Intel Quad Core 2.00 ghz Ram 8 gb Hard Disk 1 tb Masterizzatore Licenza Windows 10 PRO',
                'description'=>'PC Desktop Computer Fisso: DILC Airo, Intel Quad Core 2.0 fino a 2.3 Ghz (on board), Ram DDR3 8 gb, Hard Disk 1 tb 7200 rpm, USB 3.0, Masterizzatore, Windows 10 PRO licenziato - Garanzia Italia 24 mesi',

                'details'=>'Peso articolo	2000 g',
                'sale'=>'4',
                'brand_id' => '7',
                'subcategory_id' =>'5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '4'
            ],[
                'name'=>'Samsung UE55RU7450UXZT Smart TV ',
                'price' => '899.77',
                'summary' =>'Samsung UE55RU7450UXZT Smart TV 4K Ultra HD 55" Wi-Fi DVB-T2CS2, Serie RU7450 2019, 3840 x 2160 Pixels',
                'description'=>'La serie RU7450 è una variante di colore silver della serie RU7400 a cui aggiunge il telecomando Premium Smart Remote e la tecnologia di controllo dell’immagine Supreme UHD Dimming, HDR 10+, i TV UHD Samsung offrono un’esperienza visiva di qualità superiore grazie al sistema HDR powered by HDR10+, Dynamic Crystal Color regala colori vibranti e immagini cristalline mentre Real Game Enhancer ottimizza la velocità d’azione, il livelli di nero, contrasto, colore e audio per un’ottimale esperienza, Nessun cavo in vista con la soluzione Clean Cable, One Remote Control: tutti i contenuti che vuoi sono letteralmente a portata di mano con un unico telecomando',

                'details'=>'Peso articolo	3000 g',
                'sale'=>'54',
                'brand_id' => '2',
                'subcategory_id' =>'11',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '142'
            ],[
                'name'=>'HG5162 Videocamera digitale 1080P',
                'price' => '50.00',
                'summary' =>'HG5162 Videocamera digitale 1080P FHD DV Camcorder/Schermo LCD TFT da 2,7" / Videocamera portatile rotante da 270 gradi per bambini/principianti/Anziani regalo di Natale',
                'description'=>'【Schermo LCD ruotabile】: LCD TFT da 2,7"; Accendere / spegnere automaticamente il camcorder aprendo / chiudendo il pannello LCD; Lo schermo LCD supporta la rotazione di 270° per catturare ogni momento bello., Immagini di alta qualità】: Con la funzione anti-shake, scatta foto da 12 MP e video Full HD 1080P. La luce a LED consente di scattare foto e video in situazioni di scarsa illuminazione.,【Design confortevole】: leggero; Taglia piccola; Dotato di cinturino da polso regolabile che può essere fissato alla mano sinistra o destra, non preoccuparti di cadute impreviste., 【Persone adatte】: Facile da trasportare e riporre, perfetto per essere un regalo per i bambini, i principianti, gli anziani. Per i dilettanti, non per gli utenti professionali., 【Scheda di memoria non inclusa】: La fotocamera può aggiungere fino a 32GB di scheda SD / SDHC esterna(non incluso). Supporta uscita HDMI, uscita Mini USB 2,0.',
                'details'=>'Peso articolo	300 g',
                'sale'=>'6',
                'brand_id' => '8',
                'subcategory_id' =>'9',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '12'
            ],[
                'name'=>'Nikon Coolpix B500 Fotocamera Digitale',
                'price' => '249.77',
                'summary' =>'Nikon Coolpix B500 Fotocamera Digitale Compatta, 16 Megapixel, Zoom 40X, ISO 125 - 6.400, VR, LCD Inclinabile 3", Full HD, Bluetooth, Wi-Fi',
                'description'=>'Funzionamento semplice e intuitivo con una qualità superiore dell\'immagine, Zoom ottico 40x, Sistema VR (riduzione vibrazioni) a elevate prestazioni, SNAPBRIDGE: permette di mantenere una costante connessione a bassa potenza tra la tua fotocamera e ismart device per darti il pieno controllo dell\'esperienza fotografica, Coolpix B500 nera, Cinghia della fotocamera, 4 batterie alcaline LR6/L40 (AA) (le batterie incluse sono destinate al solo utilizzo di prova), Tappo dell\'obiettivo LC-CP31 (con cavo), cavo USB UC-E16',
                'details'=>'Peso articolo	300 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'5',
                'brand_id' => '9',
                'subcategory_id' =>'8',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '300'
            ],[
                'name'=>'Samsung EB-P1100C Batteria Portatile',
                'price' => '25.77',
                'summary' =>'Samsung EB-P1100C Batteria Portatile Polimeri di Litio (LiPo) 10000 mAh',
                'description'=>'Ricarica rapidamente, per una disponibilità ancora più immediata. Il Battery Pack di Samsung previene la sovratensione grazie alla tecnologia OVP; in questo modo, può essere ricaricato completamente in soli 220 minuti, in modalità di ricarica rapida e in totale sicurezza. Adesso il tuo Battery Pack sarà pronto all’uso più velocemente rispetto ai modelli precedenti.',
                'details'=>'Peso articolo	100 g',
                'sale'=>'0',
                'brand_id' => '2',
                'subcategory_id' =>'15',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '30'
            ],[
                'name'=>'Majestic AH 2350 BT MP3 USB DAB',
                'price' => '99.77',
                'summary' =>'Majestic AH 2350 BT MP3 USB DAB - Sistema Micro Hi-Fi radio DAB/DAB+/FM, Bluetooth, Lettore CD/MP3, Ingresso USB/AUX-IN, telecomando',
                'description'=>'Micro hi-fi corpo centrale e due casse, Radio dab/dab+/fm, Funzione bluetooth, Lettore cd/mp3, Ingressi USB e aux-in, Telecomando, Uscita cuffie 3.5mm',
                'details'=>'Peso articolo	4000 g',
                'sale'=>'15',
                'brand_id' => '10',
                'subcategory_id' =>'12',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '12'
            ],[
                'name'=>'Tv LG Televisore',
                'price' => '259.77',
                'summary' =>'Tv LG Televisore 43Lk5100Pla 43" Full Hd Virtual Surround Led',
                'description'=>'Prodotto di ottima qualità, materiale affidabile
                                Prodotto creato sia per appassionati che per professionisti
                                Prodotto utile e pratico',
                'details'=>'Peso articolo	3000 g',
                'sale'=>'0',
                'brand_id' => '11',
                'subcategory_id' =>'10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '34'
            ],[
                'name'=>'Apple MacBook Air ',
                'price' => '1229.77',
                'summary' =>'Apple MacBook Air (13", Processore Intel Core i3 dual‑core di decimo generazione a 1,1GHz, 8GB RAM, 256GB) ',
                'description'=>'Spettacolare display Retina da 13,3" con tecnologia True Tone
                                Magic Keyboard retroilluminata e Touch ID
                                Processore Intel Core i3 di decima generazione
                                Intel Iris Plus Graphics
                                Archiviazione SSD veloce
                                8GB di memoria
                                Altoparlanti con un suono stereo più ampio',
                'details'=>'Peso articolo	800 g',
                'sale'=>'13',
                'brand_id' => '6',
                'subcategory_id' =>'6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '400'
            ]/*,[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ],[
                'name'=>'Notebook Federico',
                'price' => '749.77',
                'summary' =>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit',
                'description'=>'Notebook Acer pc portatile SSD 512 Gb, Cpu Intel Quad Core i5 di 10Th Generazione fino a 4,2 Ghz, RAM 8GB, Display 15.6" Full HD, Svga UHD 620, 3 usb, wi-fi, hdmi, Win 10 Pro 64 Bit, Pronto all\'uso.
                                Pronto all\'utilizzo immediato con tutti i driver di sistema, NON NECESSITA DI NESSUNA CONSIGURAZIONE , GIA\' INIZIALIZZATO CON Windows 10 Pro 64bit, SUITE OFFICE OPEN SOURCE LIBRE OFFICE , teleassistenza con supporto Tecnico/antivirus Microsoft.
                                Ogni singolo prodotto viene testato presso il nostro centro assistenza per controllo qualità GARANZIA ITALIANA. 3 USB, 1 HDMI 1.4b, 1 Lan RJ-45, 1 bluetooth, connessione wi-fi integrata, 1 combo cuffie/microfono, 1 alimentatore CA, causa design ultra slim non è disponibile il lettore DVD/CD',

                'details'=>'Peso articolo	191 g
                            Dimensioni del collo	49,8 x 31,8 x 6,6 cm',
                'sale'=>'6',
                'brand_id' => '3',
                'subcategory_id' =>'4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0',
                'selling_number'=> '54'
            ]*/]);
    }
}
