<?php

namespace Database\Seeders;

use App\Models\AboutCms;
use Illuminate\Database\Seeder;

class AddAbouPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new AboutCms();
        $about->banner_img = 'about/abt-banner.jpg';
        $about->banner_name = 'ABOUT';
        $about->section_1_img = 'about/abt1.jpg';
        $about->section_1_name = 'STORY OF Groomely';
        $about->section_1_title = 'More than just a hair salon, we provide classic barbershop service with legendary style.';
        $about->section_1_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi. Proin dui non, risus tincidunt. Nunc id sollicitudin diam aliquet volutpat nam rhoncus morbi. Non sit ac pulvinar commodo tincidunt magnis nascetur. Scelerisque eget accumsan eget nisl vestibulum, tristique praesent tempus eget. Vestibulum viverra ut dapibus aliquam nunc auctor. Orci ultrices pellentesque sed ultricies ipsum quis neque, elementum. Enim donec sed pellentesque aliquet mi ultricies turpis non maecenas. Purus aliquet iaculis amet, vel eleifend ut elit. Vulputate amet, metus purus aenean sapien tempor, neque turpis risus. Egestas id urna ultrices dignissim.
                                        Libero aenean vestibulum placerat ultrices nullam. Semper sit ac a iaculis et morbi mattis. Pellentesque lacus, id semper id lectus ac. Dui elit pellentesque at mi quam tincidunt praesent a. Condimentum pretium aliquet aenean eu tincidunt vitae. Ac auctor sapien pretium in. Egestas metus pulvinar eu eu maecenas et. Vel fringilla quam mattis mollis vitae eu. Scelerisque dignissim turpis urna egestas suspendisse eget non. Egestas mattis felis platea sed in morbi aliquam.';
        $about->section_2_img = 'about/abt-cta.jpg';
        $about->section_2_title = 'BOOK AN APPOINTMENT';
        $about->section_3_img = 'about/abt2.jpg';
        $about->section_3_name = 'MISSION & VISION';
        $about->section_3_title = 'More than just a hair salon, we provide classic barbershop service with legendary style.';
        $about->section_3_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi. Proin dui non, risus tincidunt. Nunc id sollicitudin diam aliquet volutpat nam rhoncus morbi. Non sit ac pulvinar commodo tincidunt magnis nascetur. Scelerisque eget accumsan eget nisl vestibulum, tristique praesent tempus eget. Vestibulum viverra ut dapibus aliquam nunc auctor. Orci ultrices pellentesque sed ultricies ipsum quis neque, elementum. Enim donec sed pellentesque aliquet mi ultricies turpis non maecenas. Purus aliquet iaculis amet, vel eleifend ut elit. Vulputate amet, metus purus aenean sapien tempor, neque turpis risus. Egestas id urna ultrices dignissim.
                                        Libero aenean vestibulum placerat ultrices nullam. Semper sit ac a iaculis et morbi mattis. Pellentesque lacus, id semper id lectus ac. Dui elit pellentesque at mi quam tincidunt praesent a. Condimentum pretium aliquet aenean eu tincidunt vitae. Ac auctor sapien pretium in. Egestas metus pulvinar eu eu maecenas et. Vel fringilla quam mattis mollis vitae eu. Scelerisque dignissim turpis urna egestas suspendisse eget non. Egestas mattis felis platea sed in morbi aliquam.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris enim, viverra convallis blandit facilisi eget id urna. Consequat cursus donec in diam pellentesque imperdiet elit. Et sagittis, morbi non adipiscing malesuada nibh diam quam. Arcu, et convallis arcu in mi. Proin dui non, risus tincidunt. Nunc id sollicitudin diam aliquet volutpat nam rhoncus morbi. Non sit ac pulvinar commodo tincidunt magnis nascetur. Scelerisque eget accumsan eget nisl vestibulum, tristique praesent tempus eget. Vestibulum viverra ut dapibus aliquam nunc auctor. Orci ultrices pellentesque sed ultricies ipsum quis neque, elementum. Enim donec sed pellentesque aliquet mi ultricies turpis non maecenas. Purus aliquet iaculis amet, vel eleifend ut elit. Vulputate amet, metus purus aenean sapien tempor, neque turpis risus. Egestas id urna ultrices dignissim.
                                        Libero aenean vestibulum placerat ultrices nullam. Semper sit ac a iaculis et morbi mattis. Pellentesque lacus, id semper id lectus ac. Dui elit pellentesque at mi quam tincidunt praesent a. Condimentum pretium aliquet aenean eu tincidunt vitae. Ac auctor sapien pretium in. Egestas metus pulvinar eu eu maecenas et. Vel fringilla quam mattis mollis vitae eu. Scelerisque dignissim turpis urna egestas suspendisse eget non. Egestas mattis felis platea sed in morbi aliquam.';
        $about->save();
    }
}
