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
        DB::table('products')->insert([[
            'name'=>'Sony MDR-ZX310 Cuffie On-Ear',
            'price' => '25.00',
            'summary' =>'Sony MDR-ZX310 Cuffie, Blu',
            'description'=>'Le cuffie hanno un design leggero e pieghevole per la ottima portabilità per la tua musica.
                                I padiglioni auricolari sono imbottiti per la ottima comodità di ascolto. Il cavo ha la lunghezza di 1.2 m.',
            'details'=>'Peso articolo	127 g
                            Dimensioni prodotto	15 x 5 x 20 cm',
            'sale'=>'10',
            'brand_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'score'=>'4'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'5'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'5'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'3.5'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'3'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'1'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0'
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'score'=>'0'
            ]]);
    }
}
