<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\ClientCertificate;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Portofolio;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $faker = Faker::create();

    // for ($i = 0; $i < 10; $i++) {
    // Banner
    // Banner::create([
    //   'title' => $faker->sentence,
    //   'description' => $faker->paragraph,
    //   'thumbnail' => $faker->imageUrl(640, 480, 'banners', true),
    //   'button_name' => $faker->word,
    //   'link' => $faker->url,
    //   'is_active' => $faker->boolean,
    // ]);

    // User
    User::create([
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'password' => Hash::make('password'), // atau gunakan bcrypt($faker->password)
    ]);

    // Blog
    // Blog::create([
    //   'thumbnail' => $faker->imageUrl(640, 480, 'business', true, 'Faker'),
    //   'alt' => $faker->sentence,
    //   'title' => $faker->sentence,
    //   'slug' => Str::slug($faker->sentence),
    //   'description' => $faker->paragraph,
    //   'is_active' => $faker->boolean,
    // ]);

    // Blog Tag
    // $blogsIds = Blog::pluck('id')->toArray(); // Get all blogs to associate tags with
    // BlogTag::create([
    //   'blog_id' => $faker->randomElement($blogsIds),
    //   'tag' => $faker->word,
    // ]);

    // Client Certicate
    // ClientCertificate::create([
    //   'image' => $faker->imageUrl(640, 480, 'business', true, 'Faker'),
    //   'alt' => $faker->sentence,
    //   'category' => $faker->randomElement(['client', 'certificate']),
    //   'is_active' => $faker->boolean,
    // ]);

    // Product Category
    // ProductCategory::create([
    //   'name' => $faker->word,
    //   'description' => $faker->sentence,
    //   'thumbnail' => $faker->imageUrl(640, 480, 'business', true, 'Faker'),
    //   'alt' => $faker->sentence,
    // ]);

    // Product
    // $productCategoryIds = ProductCategory::pluck('id')->toArray();
    // Product::create([
    //   'name' => $faker->word,
    //   'description' => $faker->paragraph,
    //   'product_category_id' => $faker->randomElement($productCategoryIds),
    //   'dimension' => $faker->randomNumber(2),
    //   'utility' => $faker->word,
    //   'quality' => $faker->word,
    //   'youtube_link' => $faker->url,
    //   'is_active' => $faker->boolean,
    // ]);

    // Product Image
    // $productIds = Product::pluck('id')->toArray();
    // ProductImage::create([
    //   'product_id' => $faker->randomElement($productIds),
    //   'image' => $faker->imageUrl(640, 480, 'technics', true, 'Faker'),
    //   'alt' => $faker->sentence,
    // ]);

    // Contact
    // Contact::create([
    //   'email' => $faker->email,
    //   'name' => $faker->name,
    //   'phone_number' => $faker->phoneNumber,
    //   'product_id' => $faker->randomElement($productIds),
    //   'message' => $faker->paragraph,
    // ]);

    // Portofolio
    // Portofolio::create([
    //   'thumbnail' => $faker->imageUrl(640, 480, 'technics', true, 'Faker'),
    //   'alt' => $faker->sentence,
    //   'title' => $faker->sentence,
    //   'description' => $faker->paragraph,
    //   'location' => $faker->city,
    //   'is_active' => $faker->boolean,
    // ]);

    // Gallery

    // Gallery::create([
    //   'thumbnail' => $faker->imageUrl(640, 480, 'technics', true, 'Faker'),
    //   'alt' => $faker->sentence,
    //   'title' => $faker->sentence,
    //   'description' => $faker->paragraph,
    //   'location' => $faker->city,
    //   'is_active' => $faker->boolean,
    // ]);

    Profile::create([
      'logo_color' => 'Red',
      'logo_white' => 'White',
      'title' => 'Example Post 1',
      'tagline' => 'Lorem ipsum dolor sit amet.',
      'email' => 'example1@example.com',
      'office_number' => '123456789',
      'location' => 'Jakarta, Indonesia',
      'wa_number_1' => '987654321',
      'wa_number_2' => '987654321',
      'instagram_account' => 'example_instagram1',
      'x_account' => 'example_x1',
      'facebook_account' => 'example_facebook1',
      'linkedin_account' => 'example_inkedin1',
    ]);
    // }
  }
}
