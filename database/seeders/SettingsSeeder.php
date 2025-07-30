<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Settings;
// use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $items = [

            //Global
            ['site_title', 'A-Priori'],
            ['site_title_full', 'A-Priori Education Foundation'],
            ['site_main_logo', 'admin/assets/img/logo.png'],
            ['site_fav_icon', 'admin/assets/img/favicon.png'],
            ['site_footer_logo', 'admin/assets/img/logo.png'],
            ['site_contact_image', 'admin/assets/img/logo.png'],
            ['site_information', 'A priori'],

            ['site_phone', '01-4530632'],
            ['whatsapp_number', '9779803997680'],
            ['site_email', 'apriori@gmail.com'],
            ['site_location', 'Kathmandu, Nepal'],
            ['site_location_url', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12786.424100534105!2d85.3227563!3d27.7060256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a77f1ab301%3A0xdda817d3569bfbc2!2sPriori%20Education%20Foundation!5e1!3m2!1sen!2snp!4v1729144203343!5m2!1sen!2snp'],
            ['site_mail', 'mail.apriori.com.np'],
            ['site_url', '/'],

            ['site_copyright', 'Copyright © A-Priori Education Foundation | All Rights Reserved. Made with ❤️ by  Paradise InfoTech'],


            //contact

            ['contact_title', 'Contact'],
            ['contact_image', Null],

            ['contact_banner_image', Null],
            ['contact_section_title', "Get In Touch"],
            ['contact_description', 'A-Priori'],


            ['contact_location', 'Chitwan, Kathmandu'],
            ['contact_email', 'info@aprioriedu.com'],
            ['contact_phone', '+9779803997680'],
            ['contact_map', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12786.424100534105!2d85.3227563!3d27.7060256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a77f1ab301%3A0xdda817d3569bfbc2!2sPriori%20Education%20Foundation!5e1!3m2!1sen!2snp!4v1729144203343!5m2!1sen!2snp'],

            ['contact_seo_title', 'A-Priori'],
            ['contact_seo_description', 'A-Priori'],
            ['contact_seo_keywords', 'A-Priori'],
            ['contact_seo_schema', 'A-Priori'],

            ['contactform_title', 'Leave us your info'],
            ['contactform_description', 'Provide your details, and well schedule a call at your convenience.'],


            // Homepage

            ['homepage_title', "Under the Stars:An Educational Journey"],
            ['homepage_small_title', 'Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky'],
            ['homepage_image', Null],
            ['homepage_description', 'Serenade Under the Stars: An Educational Journey” invites you to immerse yourself in an enchanting evening under the open sky'],

            ['home_cta_1_text', 'Get in Touch'],
            ['home_cta_1_link', '/contact-us'],
            ['home_cta_2_text', 'View Courses'],
            ['home_cta_2_link', '/our-courses'],

            ['homepage_seo_title', 'A-Priori Education Foundation'],
            ['homepage_seo_keywords', 'A-Priori'],
            ['homepage_meta_description', 'A-Priori'],
            ['homepage_seo_schema', 'A-Priori'],

            ['homepage_slider_cta_button', 'Get in Touch'],
            ['homepage_slider_event_button', 'Event Calendar'],

            ['universities_title', 'Our Partner Universities'],
            ['universities_subtitle', "Dive into Excitement with Our Latest universities!"],
            ['universities_description', ""],
            ['universities_link', '/about'],
            ['universities_button', 'See All'],
            ['home_universities', ""],

            ['countries_title', 'Countries We Deal With'],
            ['countries_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['countries_description', "Dive into Excitement with Our Latest countries!"],
            ['countries_link', '/about'],
            ['countries_button', 'See All'],
            ['home_countries', ""],


            ['whyChooseUs_title', 'Why Choose Us?'],
            ['whyChooseUs_subtitle', "Our education consultants can support with excellence in guidance with education and visa consultancy in this country. We’ve been growing since 2003 with over 50 branches across 15 countries. You can enjoy a wide range of services for fulfilling your dreams to study in Australia, the UK, Canada and the US."],
            ['whyChooseUs_description', "Our education consultants can support with excellence in guidance with education and visa consultancy in this country. We’ve been growing since 2003 with over 50 branches across 15 countries. You can enjoy a wide range of services for fulfilling your dreams to study in Australia, the UK, Canada and the US."],
            ['whyChooseUs_link', '/about'],
            ['whyChooseUs_button', 'See All'],

            //Homecounter
            ['home_counter_students_title', 'International Students Assisted'],
            ['home_counter_students', '10000'],
            ['home_counter_scholarship_title', 'Scholarship Approved'],
            ['home_counter_scholarship', '1000'],
            ['home_counter_enrolled_title', 'Enrolled in IELTS/PTE classes'],
            ['home_counter_enrolled', '2500'],
            ['home_counter_affilated_title', 'Affilated College'],
            ['home_counter_affilated', '300'],


            ['teams_title', 'Our Teams'],
            ['teams_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['teams_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['teams_link', '/teams'],
            ['teams_button', 'See All'],
            ['home_teams', ""],

            ['services_title', 'Our Services'],
            ['services_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['services_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['services_link', '/services'],
            ['services_button', 'See All'],
            ['home_services', ""],

            ['aboutus_title', 'About Us'],
            ['aboutus_subtitle', "Dive into Excitement with Our Latest aboutus!"],
            ['aboutus_description', "Dive into Excitement with Our Latest aboutus!"],
            ['aboutus_link', '/about'],
            ['aboutus_button', 'See All'],

            ['contact_form_title', 'Interested To Join Our Classes?'],
            ['contact_form_subtitle', 'Fill the form given to book for our IELTS/PTE classes.'],
            ['contact_form_description', 'Fill the form given to book for our IELTS/PTE classes.'],

            ['courses_title', 'Our Courses'],
            ['courses_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['courses_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['courses_link', '/courses'],
            ['courses_button', 'See All'],
            ['home_courses', ""],


            ['testioninal_title', 'Our Testimonials'],
            ['testioninal_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['testioninal_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['testioninal_link', '/testimonals'],
            ['testioninal_button', 'See All'],
            ['home_testioninals', ""],

            ['blogs_title', 'Our Blogs'],
            ['blogs_subtitle', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['blogs_description', "Choose your next study destination!! We provide the guidelines on selecting the universities in the various destinations."],
            ['blogs_link', '/blogs'],
            ['blogs_button', 'See All'],
            ['home_blogs', ""],

        ];

        if (count($items)) {

            foreach ($items as $item) {

                Settings::create([
                    'key' => $item[0],
                    'value' => $item[1]
                ]);
            }
        }
    }
}
