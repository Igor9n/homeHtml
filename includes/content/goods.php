<?php
$goods = array(
    'corei3' => array(
        'id' => 'corei3',
        'name' => 'Intel Core i3',
        'characteristics' => array(
            '# of cores' => '4',
            'Generation' =>  'Eight',
            'Socket type' => 's1151',
            'Integrated GPU' => 'Intel UHD 630',
            'Warranty' => '3 years',
            'Price' => '5555',
            'Currency' => 'UAH'
        ),
        'catid' => 'processor',
        'shortDesc' => 'Неплохой 4-х ядерный процессор',
        'description' => 'Новый процессор Intel Core i3-8100 8-го поколения, с кодовым названием микроархитектуры 
                        Coffee Lake-S. Предназначен для настольной платформы Intel LGA 1151. Принадлежит к семейству высокопроизводительных 
                        процессоров Core i3.
                        Intel Core i3-8100 производится по стандарту 14-нм техпроцесса, имеет 4 ядра, которые работают 
                        с штатной тактовой частотой 3.6 ГГц. Объем кэш-памяти 3 уровня равен 6 МБ. Имеет 2-х канальный контроллер памяти DDR4.'

    ),
    'corei5' => array(
        'id' => 'corei5',
        'name' => 'Intel Core i5',
        'characteristics' => array(
            '# of cores' => '4',
            'Generation' =>  'Seven',
            'Socket type' => 's1151',
            'Integrated GPU' => 'Intel UHD 630',
            'Warranty' => '3 years',
            'Price' => '7099',
            'Currency' => 'UAH'
        ),
        'catid' => 'processor',
        'shortDesc' => 'Хороший 4-х ядерный процессор',
        'description' => 'Новый процессор Intel Core i5-7500 7-го поколения, с кодовым названием микроархитектуры Kaby Lake.
                     Предназначен для настольной платформы Intel LGA 1151. Принадлежит к семейству высокопроизводительных процессоров Core i5.            
                    Intel Core i5-7500 производится по стандарту 14-нм техпроцесса, имеет 4 ядра, которые работают 
                    со штатной тактовой частотой 3.4 ГГц, 3.8 ГГц в режиме Turbo Boost. Объем кэш-памяти 3 уровня равен 
                    6 МБ. Имеет 2-х канальный контроллер памяти DDR4.'
    ),
    'corei7' => array(
        'id' => 'corei7',
        'name' => 'Intel Core i7',
        'characteristics' => array(
            '# of cores' => '4',
            'Generation' =>  'Seven',
            'Socket type' => 's1151',
            'Integrated GPU' => 'Intel UHD 630',
            'Warranty' => '3 years',
            'Price' => '12250',
            'Currency' => 'UAH'
        ),
        'catid' => 'processor',
        'shortDesc' => 'Отличный 4-х ядерный процессор',
        'description' => 'Новый процессор Intel Core i7-7700 7-го поколения, с кодовым названием микроархитектуры Kaby Lake. 
                        Предназначен для настольной платформы Intel LGA 1151. Принадлежит к семейству высокопроизводительных процессоров Core i7.
                    Intel Core i7-7700 производится по стандарту 14-нм техпроцесса, имеет 4 ядра, которые
                     работают в 8 потоков со штатной тактовой частотой 3.6 ГГц, 4.2 ГГц в режиме Turbo Boost. Объем кэш-памяти 
                     3 уровня равен 8 МБ. Имеет 2-х канальный контроллер памяти DDR4.'

    ),
    'corei9' => array(
        'id' => 'corei9',
        'name' => 'Intel Core i9',
        'characteristics' => array(
            '# of cores' => '18',
            'Generation' =>  'Six',
            'Socket type' => 's1151',
            'Integrated GPU' => 'Intel UHD 630',
            'Warranty' => '3 years',
            'Price' => '19316',
            'Currency' => 'UAH'
        ),
        'catid' => 'processor',
        'shortDesc' => 'Отличный 18-и ядерный процессор',
        'description' => 'Процессор INTEL Core™ i9 9900K (BX80684I99900K) с кодовым названием микроархитектуры 
                        Coffee Lake-S Refresh. Предназначен для настольной платформы Intel LGA 1151. Принадлежит к семейству 
                        высокопроизводительных процессоров Core i9.
                        Процессор INTEL Core™ i9 9900K производится по стандарту 14-нм техпроцесса, 
                        имеет 8 ядер, которые работают в 14 потоков со штатной тактовой частотой 3.6 ГГц, 5.0 ГГц в режиме Turbo Boost. 
                        Объем кэш-памяти 3 уровня равен 14 МБ. Имеет 2-х канальный контроллер памяти DDR4.'

    ),
    'ryzen5' => array(
        'id' => 'ryzen5',
        'name' => 'AMD Ryzen 5 2600X',
        'characteristics' => array(
            '# of cores' => '6',
            'Generation' =>  'First',
            'Socket type' => 'AM4',
            'Integrated GPU' => 'No',
            'Warranty' => '5 years',
            'Price' => '7788',
            'Currency' => 'UAH'
        ),
        'catid' => 'processor',
        'shortDesc' => 'Отличный 6-и ядерный процессор',
        'description' => 'Особливості мікроархітектури Zen
                    У новій архітектурі AMD Zen використовується потужний механізм виконання, а також підтримується функція одночасної 
                    багатопотоковості (SMT). Ядра Zen розроблені для ефективного використання наявних ресурсів мікроархітектури для 
                    забезпечення максимальної обчислювальної продуктивності. Нова трирівнева кеш-пам\'ять із низьким затриманням і нові 
                    алгоритми попереднього вибирання неабияк зменшують кількість кеш-промахів і збільшують пропускну здатність, порівнюючи з
                     попередньою мікроархітектурою.
                    
                    Продуктивність і ефективність для застосунків наступного покоління
                    Хмарні обчислення, продуктивність промислового рівня, технології віртуальної реальності, ігри й безпека даних 
                    відкривають нові горизонти та вимагають найвищого рівня продуктивності обчислень за максимальної енергоефективності.
                     Спочатку інженери компанії AMD розробили нову архітектуру Zen у такий спосіб, щоб вона могла відповідати та навіть 
                     перевершувати високі вимоги, що стосуються продуктивності й ефективності, не тільки програм наступного, а й подальших поколінь.'

    ),
    'ryzen7' => array(
        'id' => 'ryzen7',
        'name' => 'AMD Ryzen 7 1700',
        'characteristics' => array(
            '# of cores' => '8',
            'Generation' =>  'First',
            'Socket type' => 'AM4',
            'Integrated GPU' => 'No',
            'Warranty' => '5 years',
            'Price' => '7517',
            'Currency' => 'UAH'
        ),
        'catid' => 'processor',
        'shortDesc' => 'Отличный 8-и ядерный процессор',
        'description' => 'Особливості мікроархітектури Zen
                    У новій архітектурі AMD Zen використовується потужний механізм виконання, а також підтримується функція одночасної 
                    багатопотоковості (SMT). Ядра Zen розроблені для ефективного використання наявних ресурсів мікроархітектури для 
                    забезпечення максимальної обчислювальної продуктивності. Нова трирівнева кеш-пам\'ять із низьким затриманням і нові 
                    алгоритми попереднього вибирання неабияк зменшують кількість кеш-промахів і збільшують пропускну здатність, порівнюючи з
                     попередньою мікроархітектурою.
                    
                    Продуктивність і ефективність для застосунків наступного покоління
                    Хмарні обчислення, продуктивність промислового рівня, технології віртуальної реальності, ігри й безпека даних 
                    відкривають нові горизонти та вимагають найвищого рівня продуктивності обчислень за максимальної енергоефективності.
                     Спочатку інженери компанії AMD розробили нову архітектуру Zen у такий спосіб, щоб вона могла відповідати та навіть 
                     перевершувати високі вимоги, що стосуються продуктивності й ефективності, не тільки програм наступного, а й подальших поколінь.'

    ),
    'opticmag27c' => array(
        'id' => 'opticmag27c',
        'name' => 'Monitor 27" MSI Optix MAG27C',
        'characteristics' => array(
            'Inches' => '27"',
            'Refresh rate' =>  '144Hz',
            'Response time' => '1ms',
            'View angle' => '178°',
            'Warranty' => '3 years',
            'Price' => '15290',
            'Currency' => 'UAH'
        ),
        'catid' => 'monitor',
        'shortDesc' => 'Отличный 144Гц монитор',
        'description' => 'Optix MAG27CQ — це ігровий монітор із вигнутим екраном, що має VA-матрицю з низьким часом 
                    відгуку (1 мс), високою роздільною здатністю (2560х1440 пікселів) і підвищеною частотою оновлення (144 Гц). 
                    Утілюючи в собі найсучасніші технології, включно з адаптивною синхронізацією Adaptive Sync, ця модель буде прекрасним
                     вибором для комп\'ютерних ігор різних жанрів, зокрема змагальних.'
    ),
    'gtx1050ti' => array(
        'id' => 'gtx1050ti',
        'name' => 'Asus PCI-Ex GeForce GTX 1050 Ti Cerberus 4GB GDDR5',
        'characteristics' => array(
            'Inches' => '27"',
            'Memory type' =>  'GDDR5',
            'Cooling system' => 'Dual fan',
            'Maximum resolution' => '7680x4320',
            'Warranty' => '2 years',
            'Price' => '6207',
            'Currency' => 'UAH'
        ),
        'catid' => 'videocard',
        'shortDesc' => 'Отличная видео карта',
        'description' => 'OASUS Cerberus GeForce GTX 1050 Ti — це високопродуктивна графічна карта, 
        яка спроектована з підвищеною надійністю й ігровою продуктивністю. Asus тестує карти максимально з 
        новітніми іграми та здійснює великі випробування надійності та порівняльний аналіз із великим навантаженням 
        у 15 разів довше, ніж зазвичай.'
    )
);