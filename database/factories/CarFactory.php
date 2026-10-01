<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Car;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition(): array
    {
        $categories = [
            'island' => 'Island 4x4',
            'van' => 'Executive & Family Van',
            'suv' => '7-Seater SUV',
            'luxury' => 'VIP Luxury 4x4',
            'electric' => 'Hybrid & EV',
        ];

        $category = $this->faker->randomElement(array_keys($categories));
        $categoryName = $categories[$category];
        
        $makes = [
            'island' => ['Suzuki Jimny', 'Jeep Wrangler', 'Ford Bronco', 'Toyota Hilux'],
            'van' => ['Toyota HiAce', 'Nissan Urvan', 'Hyundai Staria', 'Kia Carnival'],
            'suv' => ['Toyota Fortuner', 'Ford Everest', 'Mitsubishi Montero', 'Nissan Terra'],
            'luxury' => ['Toyota Land Cruiser', 'Lexus LX', 'BMW X5', 'Mercedes-Benz G-Class'],
            'electric' => ['BYD Atto 3', 'Toyota Corolla Cross Hybrid', 'Nissan Kicks e-POWER', 'Tesla Model 3'],
        ];

        $name = $this->faker->randomElement($makes[$category]);
        
        $images = [
            'Suzuki Jimny' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1200',
            'Jeep Wrangler' => 'https://images.unsplash.com/photo-1582260655866-e011400dc937?q=80&w=1200',
            'Ford Bronco' => 'https://images.unsplash.com/photo-1629858349279-881c195f410f?q=80&w=1200',
            'Toyota Hilux' => 'https://images.unsplash.com/photo-1596443306899-07b9a5c88b0a?q=80&w=1200',
            'Toyota HiAce' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?q=80&w=1200',
            'Nissan Urvan' => 'https://images.unsplash.com/photo-1568844293986-8d0400bc4745?q=80&w=1200',
            'Hyundai Staria' => 'https://images.unsplash.com/photo-1617814076367-b759c7d7e738?q=80&w=1200',
            'Kia Carnival' => 'https://images.unsplash.com/photo-1616450091395-5853248ef7e0?q=80&w=1200',
            'Toyota Fortuner' => 'https://images.unsplash.com/photo-1520031441872-265e4ff70366?q=80&w=1200',
            'Ford Everest' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=1200',
            'Mitsubishi Montero' => 'https://images.unsplash.com/photo-1589332247291-032a353d262d?q=80&w=1200',
            'Nissan Terra' => 'https://images.unsplash.com/photo-1533621456172-132b31f74db6?q=80&w=1200',
            'Toyota Land Cruiser' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?q=80&w=1200',
            'Lexus LX' => 'https://images.unsplash.com/photo-1542038573-03dbcc7a9a6b?q=80&w=1200',
            'BMW X5' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?q=80&w=1200',
            'Mercedes-Benz G-Class' => 'https://images.unsplash.com/photo-1520050206274-a1ae44613e6d?q=80&w=1200',
            'BYD Atto 3' => 'https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=1200',
            'Toyota Corolla Cross Hybrid' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?q=80&w=1200',
            'Nissan Kicks e-POWER' => 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?q=80&w=1200',
            'Tesla Model 3' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?q=80&w=1200'
        ];

        $image = $images[$name] ?? 'https://images.unsplash.com/photo-1542362567-b07e54358753?q=80&w=1200';
        
        $name = $name . ' ' . $this->faker->word();
        $name = ucwords($name);

        $badges = ['Island Favorite', 'Balikbayan Choice', 'Family Comfort', 'VIP Only', 'Zero Emission', null];
        $badgeColors = ['bg-sunset-gold', 'bg-viaje-400', 'bg-ocean-400', 'bg-sunset-amber', 'bg-slate-800'];

        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(4),
            'status' => $this->faker->randomElement(['Available', 'Available', 'Available', 'Rented', 'Maintenance']),
            'category' => $category,
            'categoryName' => $categoryName,
            'dailyRate' => $this->faker->numberBetween(2500, 15000),
            'rating' => $this->faker->randomFloat(2, 4.0, 5.0),
            'reviews' => $this->faker->numberBetween(10, 500),
            'seats' => $this->faker->numberBetween(4, 12),
            'bags' => $this->faker->numberBetween(2, 8),
            'transmission' => $this->faker->randomElement(['Automatic', 'Manual']),
            'fuel' => $this->faker->randomElement(['Petrol', 'Diesel', 'Hybrid', 'Electric']),
            'eco' => $this->faker->numberBetween(10, 25) . ' km/L',
            'image' => $image,
            'badge' => $this->faker->randomElement($badges),
            'badgeColor' => $this->faker->randomElement($badgeColors),
        ];
    }
}
