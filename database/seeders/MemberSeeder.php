<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Member::create([
                'department_id' => 1,
                'position_id' => 1,
                'prodi_id' => 3,
                'name' => 'Daniel Simbolon',
                'nim' => '14S20020',
                'email' => 'simbolondaniel007@gmail.com',
                'phone' => '081320585103',
                'image' => 'danielsimbolon.jpeg',
                'linkedin' => 'https://www.linkedin.com/in/',
                'instagram' => 'https://www.instagram.com/',
                'github' => 'https://github.com/',
        ]);

        
        Member::create([
            'department_id' => 1,
            'position_id' => 2,
            'prodi_id' => 4,
            'name' => 'Paul M P Nainggolan',
            'nim' => '13320023',
            'email' => 'paulnainggolan2012@gmail.com',
            'phone' => '085270421752',
            'image' => 'paulktl.png',
            'linkedin' => 'https://www.linkedin.com/in/paulnainggolan/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/paulmartin20',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 3,
            'prodi_id' => 4,
            'name' => 'Maruli A Siagian',
            'nim' => '13320056',
            'email' => 'tinasiagian121@gmail.com',
            'phone' => '082168263475',
            'image' => 'mar.jpeg',
            'linkedin' => 'https://www.linkedin.com/in/maruli-agustina-siagian-1727bb242',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 3,
            'name' => 'Agung Maulana Pane',
            'nim' => '14S21026',
            'email' => 'agungpane07@gmail.com',
            'phone' => '082165714717',
            'image' => 'agungTE.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 2,
            'prodi_id' => 1,
            'name' => 'Jhon Videlis Simamora',
            'nim' => '11S18023',
            'email' => 'jhonvidelis@gmail.com',
            'phone' => '08123456789',
            'image' => 'jhon.jpeg',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 4,
            'name' => 'F. Salmanso Pakpahan',
            'nim' => '13321032',
            'email' => 'salmansopakpahan2017@gmail.com',
            'phone' => '081370847432',
            'image' => 'salmansoTK.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 4,
            'name' => 'Jenris Simamora',
            'nim' => '13321037',
            'email' => 'jenrissimamora2@gmail.com',
            'phone' => '089620299076',
            'image' => 'jenrisTK.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 5,
            'prodi_id' => 6,
            'name' => 'Rody Towolom',
            'nim' => '11420017',
            'email' => 'rodytowolom00@gmail.com',
            'phone' => '082273817832',
            'image' => 'roditrpl.png',
            'linkedin' => 'https://www.linkedin.com/in/rody-towolom-165b42242?trk=contact-info',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 3,
            'name' => 'Marco Yosafat Siagian',
            'nim' => '14S21025',
            'email' => 'marcoys00@gmail.com',
            'phone' => '085357433100',
            'image' => 'marcoTE.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 5,
            'name' => 'Joi Diego Napitupulu',
            'nim' => '11322034',
            'email' => 'joyfuxoz12@gmail.com',
            'phone' => '081360010609',
            'image' => 'joi.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 3,
            'name' => 'Michael N Panjaitan',
            'nim' => '14S22022',
            'email' => 'michaelpjtn07@gmail.com',
            'phone' => '083876413507',
            'image' => 'michael.png',
            'linkedin' => 'https://www.linkedin.com/in/',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

        Member::create([
            'department_id' => 1,
            'position_id' => 7,
            'prodi_id' => 3,
            'name' => 'Stefen Sinaga',
            'nim' => '14S21034',
            'email' => 'stefenagaz@gmail.com',
            'phone' => '081381802153',
            'image' => 'stefen.jpeg',
            'linkedin' => 'https://www.linkedin.com/in/stefen-sinaga-06bb5727a',
            'instagram' => 'https://www.instagram.com/',
            'github' => 'https://github.com/',
        ]);

    }
}
