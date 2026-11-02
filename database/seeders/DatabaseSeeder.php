<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Place;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        // 1. Categories
        $lakes = Category::create(['name' => 'Lakes', 'slug' => 'lakes', 'image' => 'lakes/saiful-muluk.jpeg']);
        $historical = Category::create(['name' => 'Historical', 'slug' => 'historical', 'image' => 'historical/lahore-fort.jpeg']);
        $beaches = Category::create(['name' => 'Beaches', 'slug' => 'beaches', 'image' => 'beaches/kund-malir.webp']);
        $mountains = Category::create(['name' => 'Mountains', 'slug' => 'mountains', 'image' => 'mountains/k2-peak.jpeg']);
        $valleys = Category::create(['name' => 'Valleys', 'slug' => 'valleys', 'image' => 'valleys/hunza-valley.jpeg']);
        $deserts = Category::create(['name' => 'Deserts', 'slug' => 'deserts', 'image' => 'deserts/thar-desert.jpeg']);

        // 2. Lakes Places
        Place::create([
            'category_id' => $lakes->id,
            'title' => 'Saiful Muluk Lake',
            'slug' => 'saiful-muluk-lake',
            'location' => 'Kaghan Valley, KPK',
            'image' => 'lakes/saiful-muluk.jpeg',
            'description' => 'A fairy-tale mountainous lake located at the northern end of the Kaghan Valley.',
            'best_time' => 'May to September',
            'activities' => 'Boating, Photography, Camping',
            'facilities' => 'Hotels nearby, Food Stalls, Parking',
            'budget' => 'PKR 15,000 - 25,000 per person'
        ]);
        Place::create([
            'category_id' => $lakes->id,
            'title' => 'Attabad Lake',
            'slug' => 'attabad-lake',
            'location' => 'Hunza Valley, Gilgit-Baltistan',
            'image' => 'lakes/attabad-lake.jpg',
            'description' => 'Famous for its striking turquoise blue water, formed by a massive landslide.',
            'best_time' => 'April to October',
            'activities' => 'Boating, Jet Skiing, Photography',
            'facilities' => 'Resorts, Boating Clubs, Cafes',
            'budget' => 'PKR 20,000 - 35,000 per person'
        ]);
        Place::create([
            'category_id' => $lakes->id,
            'title' => 'Shangrila Lake',
            'slug' => 'shangrila-lake',
            'location' => 'Skardu, Gilgit-Baltistan',
            'image' => 'lakes/shangrila-lake.webp',
            'description' => 'Heart-shaped resort lake surrounded by lush orchards and majestic mountains.',
            'best_time' => 'May to September',
            'activities' => 'Boating, Relaxing, Photography',
            'facilities' => 'Luxury Resort, Restaurants, Boating',
            'budget' => 'PKR 30,000 - 45,000 per person'
        ]);
        Place::create([
            'category_id' => $lakes->id,
            'title' => 'Paye Lake',
            'slug' => 'paye-lake',
            'location' => 'Shogran, Kaghan Valley',
            'image' => 'lakes/paye-lake.webp',
            'description' => 'A small, serene lake nestled in the lush green meadows of Makra Peak.',
            'best_time' => 'June to August',
            'activities' => 'Horse Riding, Hiking, Nature Walk',
            'facilities' => 'Jeep Track, Local Tea Stalls',
            'budget' => 'PKR 10,000 - 18,000 per person'
        ]);
        Place::create([
            'category_id' => $lakes->id,
            'title' => 'Rush Lake',
            'slug' => 'rush-lake',
            'location' => 'Nagar Valley, Gilgit-Baltistan',
            'image' => 'lakes/rush-lake.jpg',
            'description' => 'One of the highest alpine lakes in the world offering breathtaking views.',
            'best_time' => 'July to September',
            'activities' => 'Trekking, Camping, Mountaineering',
            'facilities' => 'Guides, Camping Sites',
            'budget' => 'PKR 40,000 - 60,000 per person'
        ]);

        // 3. Historical Places
        Place::create([
            'category_id' => $historical->id,
            'title' => 'Badshahi Mosque',
            'slug' => 'badshahi-mosque',
            'location' => 'Lahore, Punjab',
            'image' => 'historical/badshahi-mosque.webp',
            'description' => 'An iconic Mughal-era mosque known for its grand red sandstone architecture.',
            'best_time' => 'October to March',
            'activities' => 'Sightseeing, Photography, Cultural Exploration',
            'facilities' => 'Parking, Guides, Restrooms',
            'budget' => 'PKR 2,000 - 5,000 per person'
        ]);
        Place::create([
            'category_id' => $historical->id,
            'title' => 'Lahore Fort',
            'slug' => 'lahore-fort',
            'location' => 'Lahore, Punjab',
            'image' => 'historical/lahore-fort.jpeg',
            'description' => 'A historical citadel showcasing magnificent Mughal palaces and gardens.',
            'best_time' => 'October to March',
            'activities' => 'Museum Visit, History Tours, Photography',
            'facilities' => 'Ticket Counter, Restrooms, Cafes',
            'budget' => 'PKR 2,500 - 5,000 per person'
        ]);
        Place::create([
            'category_id' => $historical->id,
            'title' => 'Mohenjo-daro',
            'slug' => 'mohenjo-daro',
            'location' => 'Larkana, Sindh',
            'image' => 'historical/mohenjo-daro.jpeg',
            'description' => 'An ancient Indus Valley Civilization archaeological site dating back to 2500 BCE.',
            'best_time' => 'November to February',
            'activities' => 'Archaeological Tours, Museum Visit',
            'facilities' => 'Guide Service, Museum, Parking',
            'budget' => 'PKR 5,000 - 10,000 per person'
        ]);
        Place::create([
            'category_id' => $historical->id,
            'title' => 'Taxila Museum & Ruins',
            'slug' => 'taxila',
            'location' => 'Taxila, Punjab',
            'image' => 'historical/taxila.webp',
            'description' => 'Ancient center of Buddhist learning with extensive historical ruins.',
            'best_time' => 'October to April',
            'activities' => 'Historical Exploration, Museum Tours',
            'facilities' => 'Parking, Tour Guides',
            'budget' => 'PKR 3,000 - 6,000 per person'
        ]);
        Place::create([
            'category_id' => $historical->id,
            'title' => 'Rohtas Fort',
            'slug' => 'rohtas-fort',
            'location' => 'Jhelum, Punjab',
            'image' => 'historical/rohtas-fort.jpg',
            'description' => 'A massive 16th-century fortress built by Sher Shah Suri.',
            'best_time' => 'November to March',
            'activities' => 'Hiking, Fort Exploration, Photography',
            'facilities' => 'Parking, Local Guides',
            'budget' => 'PKR 3,000 - 7,000 per person'
        ]);

        // 4. Beaches Places
        Place::create([
            'category_id' => $beaches->id,
            'title' => 'Kund Malir Beach',
            'slug' => 'kund-malir-beach',
            'location' => 'Makran Coastal Highway, Balochistan',
            'image' => 'beaches/kund-malir.webp',
            'description' => 'A pristine beach where crystal blue ocean waves meet desert mountains.',
            'best_time' => 'October to February',
            'activities' => 'Beach Camping, Stargazing, Swimming',
            'facilities' => 'Basic Huts, Parking, Food Stalls',
            'budget' => 'PKR 8,000 - 15,000 per person'
        ]);
        Place::create([
            'category_id' => $beaches->id,
            'title' => 'Astola Island',
            'slug' => 'astola-island',
            'location' => 'Off Balochistan Coast',
            'image' => 'beaches/astola-island.jpeg',
            'description' => 'Pakistan largest uninhabited offshore island, famous for scuba diving and marine life.',
            'best_time' => 'October to March',
            'activities' => 'Scuba Diving, Camping, Snorkeling',
            'facilities' => 'Boat Rentals, Camping Gear',
            'budget' => 'PKR 15,000 - 25,000 per person'
        ]);
        Place::create([
            'category_id' => $beaches->id,
            'title' => 'French Beach',
            'slug' => 'french-beach',
            'location' => 'Karachi, Sindh',
            'image' => 'beaches/french-beach.jpg',
            'description' => 'A rocky beach between Paradise Point and Hawkes Bay, popular for private huts.',
            'best_time' => 'All Year Round',
            'activities' => 'Swimming, Snorkeling, Huts Gathering',
            'facilities' => 'Rental Huts, Parking',
            'budget' => 'PKR 5,000 - 10,000 per person'
        ]);
        Place::create([
            'category_id' => $beaches->id,
            'title' => 'Ormara Beach',
            'slug' => 'ormara-beach',
            'location' => 'Balochistan Coast',
            'image' => 'beaches/ormara-beach.webp',
            'description' => 'A scenic deep-water sea port and beach along the Makran coastal highway.',
            'best_time' => 'November to February',
            'activities' => 'Beach Walking, Fishing, Photography',
            'facilities' => 'Hotels, Local Dhabas',
            'budget' => 'PKR 10,000 - 18,000 per person'
        ]);

        // 5. Mountains Places
        Place::create([
            'category_id' => $mountains->id,
            'title' => 'K2 Peak Base Camp',
            'slug' => 'k2-peak',
            'location' => 'Gilgit-Baltistan',
            'image' => 'mountains/k2-peak.jpeg',
            'description' => 'The second-highest mountain on Earth, located in the Karakoram range.',
            'best_time' => 'June to August',
            'activities' => 'Trekking, Mountaineering, Camping',
            'facilities' => 'Guided Expeditions, Campsites',
            'budget' => 'PKR 150,000 - 250,000 per person'
        ]);
        Place::create([
            'category_id' => $mountains->id,
            'title' => 'Nanga Parbat',
            'slug' => 'nanga-parbat',
            'location' => 'Diamer, Gilgit-Baltistan',
            'image' => 'mountains/nanga-parbat.jpeg',
            'description' => 'The ninth highest mountain in the world, known as the Killer Mountain.',
            'best_time' => 'July to September',
            'activities' => 'Trekking to Fairy Meadows, Photography',
            'facilities' => 'Wooden Cottages, Camping Pods',
            'budget' => 'PKR 25,000 - 45,000 per person'
        ]);
        Place::create([
            'category_id' => $mountains->id,
            'title' => 'Rakaposhi',
            'slug' => 'rakaposhi',
            'location' => 'Nagar Valley, Gilgit-Baltistan',
            'image' => 'mountains/rakaposhi.jpeg',
            'description' => 'A mountain in the Karakoram range with a magnificent viewpoint from the Karakoram Highway.',
            'best_time' => 'May to October',
            'activities' => 'Sightseeing, Viewpoint Dining, Hiking',
            'facilities' => 'Hotels, Restaurants, Parking',
            'budget' => 'PKR 20,000 - 35,000 per person'
        ]);
        Place::create([
            'category_id' => $mountains->id,
            'title' => 'Broad Peak',
            'slug' => 'broad-peak',
            'location' => 'Karakoram Range',
            'image' => 'mountains/broad-peak.jpeg',
            'description' => 'The 12th highest mountain in the world, neighboring K2.',
            'best_time' => 'June to August',
            'activities' => 'Extreme Trekking, Mountaineering',
            'facilities' => 'Basecamp Support',
            'budget' => 'PKR 130,000 - 220,000 per person'
        ]);
        Place::create([
            'category_id' => $mountains->id,
            'title' => 'Tirich Mir',
            'slug' => 'tirich-mir',
            'location' => 'Chitral, KPK',
            'image' => 'mountains/tirich-mir.jpeg',
            'description' => 'The highest mountain of the Hindu Kush range.',
            'best_time' => 'June to September',
            'activities' => 'Climbing, Sightseeing, Valley Exploration',
            'facilities' => 'Local Guest Houses',
            'budget' => 'PKR 35,000 - 55,000 per person'
        ]);

        // 6. Valleys Places
        Place::create([
            'category_id' => $valleys->id,
            'title' => 'Hunza Valley',
            'slug' => 'hunza-valley',
            'location' => 'Gilgit-Baltistan',
            'image' => 'valleys/hunza-valley.jpeg',
            'description' => 'A breathtaking mountainous valley famous for autumn colors and warm hospitality.',
            'best_time' => 'April to October',
            'activities' => 'Sightseeing, Cultural Tours, Hiking',
            'facilities' => 'Luxury Hotels, Cafes, Transport',
            'budget' => 'PKR 35,000 - 60,000 per person'
        ]);
        Place::create([
            'category_id' => $valleys->id,
            'title' => 'Swat Valley',
            'slug' => 'swat-valley',
            'location' => 'Khyber Pakhtunkhwa',
            'image' => 'valleys/swat-valley.webp',
            'description' => 'Known as the Switzerland of Pakistan, featuring lush green mountains and rivers.',
            'best_time' => 'May to September',
            'activities' => 'River Rafting, Sightseeing, Cable Car',
            'facilities' => 'Hotels, Restaurants, Markets',
            'budget' => 'PKR 15,000 - 30,000 per person'
        ]);
        Place::create([
            'category_id' => $valleys->id,
            'title' => 'Neelum Valley',
            'slug' => 'neelum-valley',
            'location' => 'Azad Kashmir',
            'image' => 'valleys/neelum-valley.jpeg',
            'description' => 'A 200km long bow-shaped valley lush with green forests and rushing rivers.',
            'best_time' => 'May to October',
            'activities' => 'River Views, Hiking, Photography',
            'facilities' => 'Resorts, Guest Houses, Transport',
            'budget' => 'PKR 20,000 - 35,000 per person'
        ]);
        Place::create([
            'category_id' => $valleys->id,
            'title' => 'Naran Kaghan Valley',
            'slug' => 'naran-valley',
            'location' => 'Khyber Pakhtunkhwa',
            'image' => 'valleys/naran-valley.jpeg',
            'description' => 'Famous alpine valley with roaring Kunhar river and snowy mountain passes.',
            'best_time' => 'June to September',
            'activities' => 'Jeep Safari, River Rafting, Hiking',
            'facilities' => 'Hotels, Restaurants, Tour Operators',
            'budget' => 'PKR 18,000 - 30,000 per person'
        ]);
        Place::create([
            'category_id' => $valleys->id,
            'title' => 'Skardu Valley',
            'slug' => 'skardu-valley',
            'location' => 'Gilgit-Baltistan',
            'image' => 'valleys/skardu-valley.jpeg',
            'description' => 'A gorgeous valley known for cold deserts, crystal lakes, and towering peaks.',
            'best_time' => 'May to September',
            'activities' => 'Jeep Safari, Desert Camping, Photography',
            'facilities' => 'Hotels, Transport, Restaurants',
            'budget' => 'PKR 30,000 - 50,000 per person'
        ]);

        // 7. Deserts Places
        Place::create([
            'category_id' => $deserts->id,
            'title' => 'Thar Desert',
            'slug' => 'thar-desert',
            'location' => 'Tharparkar, Sindh',
            'image' => 'deserts/thar-desert.jpeg',
            'description' => 'A vast desert known for golden sand dunes and vibrant cultural heritage.',
            'best_time' => 'November to February',
            'activities' => 'Desert Safari, Camel Riding, Cultural Nights',
            'facilities' => 'Resorts, Local Food, Guides',
            'budget' => 'PKR 12,000 - 20,000 per person'
        ]);
        Place::create([
            'category_id' => $deserts->id,
            'title' => 'Cholistan Desert',
            'slug' => 'cholistan-desert',
            'location' => 'Bahawalpur, Punjab',
            'image' => 'deserts/cholistan-desert.jpeg',
            'description' => 'Sprawling desert famous for ancient forts and the annual Jeep Rally.',
            'best_time' => 'October to February',
            'activities' => 'Desert Jeep Rally, Fort Exploration, Camping',
            'facilities' => 'Tourist Camps, Jeeps, Local Guides',
            'budget' => 'PKR 10,000 - 18,000 per person'
        ]);
        Place::create([
            'category_id' => $deserts->id,
            'title' => 'Katpana Cold Desert',
            'slug' => 'katpana-desert',
            'location' => 'Skardu, Gilgit-Baltistan',
            'image' => 'deserts/katpana-desert.jpeg',
            'description' => 'The highest cold desert in the world featuring stunning sand dunes.',
            'best_time' => 'May to September',
            'activities' => 'Sand Bashing, Stargazing, Photography',
            'facilities' => 'Hotels in Skardu city, Parking',
            'budget' => 'PKR 15,000 - 25,000 per person'
        ]);
        Place::create([
            'category_id' => $deserts->id,
            'title' => 'Sarfranga Cold Desert',
            'slug' => 'sarfranga-desert',
            'location' => 'Skardu, Gilgit-Baltistan',
            'image' => 'deserts/sarfranga-desert.jpeg',
            'description' => 'Another scenic cold desert in Skardu hosting desert polo tournaments.',
            'best_time' => 'May to September',
            'activities' => 'Polo Events, Quad Biking, Camping',
            'facilities' => 'Campsites, Local Transport',
            'budget' => 'PKR 15,000 - 25,000 per person'
        ]);
        Place::create([
            'category_id' => $deserts->id,
            'title' => 'Tharparkar Region',
            'slug' => 'tharparkar',
            'location' => 'Sindh',
            'image' => 'deserts/tharparkar.jpeg',
            'description' => 'Unique desert region noted for its religious harmony and distinct culture.',
            'best_time' => 'November to February',
            'activities' => 'Cultural Tourism, Photography',
            'facilities' => 'Rest Houses, Local Markets',
            'budget' => 'PKR 8,000 - 15,000 per person'
        ]);
    }
}