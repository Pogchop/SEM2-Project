<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

require_once 'vendor/autoload.php';

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $min = strtotime('1980-01-01');
//        $max = strtotime('1999-31-31');
        $numberPrefixes = ['0812', '0813', '0814', '0815', '0816', '0817', '0818', '0819', '0909', '0908'];
        $faker = Factory::create('vi_VN');

        DB::table('counselors')->insert([
//            [
//                'fname' => $faker->firstName(),
//                'lname' => $faker->lastName(),
//                'email' => $faker->email(),
//                'password' => Hash::make('password'),
//                'dob' => date('Y-m-d', rand($min, $max)),
//                'phone' => $numberPrefixes[array_rand($numberPrefixes)] . $this->randomNumberSequence()
//            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'dob' => $faker->dateTimeBetween('1980-01-01'),
                'phone' => $faker->phoneNumber()
            ]
        ]);

        DB::table('grades')->insert([
            [
                'teacher_id' => 1,
                'course_id' => 1,
                'year' => 2019,
                'name' => 'T2019M',
                'description' => 'Lop Hoc Co Thi'
            ],
            [
                'teacher_id' => 1,
                'course_id' => 2,
                'year' => 2020,
                'name' => 'T2020N',
                'description' => 'Lop Hoc Co Thi Ver2',
            ],
            [
                'teacher_id' => 2,
                'course_id' => 1,
                'year' => 2020,
                'name' => 'T2020N',
                'description' => 'Lop Hoc Co Ha',
            ],
            [
                'teacher_id' => 1,
                'course_id' => 3,
                'year' => 2019,
                'name' => 'T2019A',
                'description' => 'Lop Hoc Co Thi Ver3',
            ],
            [
                'teacher_id' => 1,
                'course_id' => 2,
                'year' => 2020,
                'name' => 'T2020M',
                'description' => 'Lop Hoc Co Thi Ver2',
            ]
        ]);

        DB::table('subjects')->insert([
            [
                'course_id' => 1,
                'acronym' => 'ADCP',
                'name' => 'An Di Ci Pee'
            ],
            [
                'course_id' => 1,
                'acronym' => 'AILE',
                'name' => 'An In Lieu Eiu'
            ],
            [
                'course_id' => 1,
                'acronym' => 'BMEI',
                'name' => 'Bi Mu En Ieu'
            ],
            [
                'course_id' => 2,
                'acronym' => 'KMIJ',
                'name' => 'Khong Mua Ieu Jieu'
            ],
            [
                'course_id' => 2,
                'acronym' => 'KEUJ',
                'name' => 'Keu Eun Uoi Jeu'
            ]
        ]);

        DB::table('courses')->insert([
            [
                'name' => 'Khoa hoc co ban (4 thang)',
                'summary' => 'Ban se nam bat duoc tat ca nhung thu co ban ve code'
            ],
            [
                'name' => 'Khoa hoc nang cao (6 thang)',
                'summary' => 'Ban se nam bat duoc nhung thu nang cao ve code'
            ],
            [
                'name' => 'Khoa hoc master (12 thang)',
                'summary' => 'Ban se dung duoc cac framework, hieu duoc co ban va nang cao ve code'
            ]
        ]);

        DB::table('training_departments')->insert([
            [
                'email' => 'tungtran102@fpt.edu.vn',
                'password' => $faker->password,
                'fname' => 'Tran',
                'lname' => 'Tung',
                'dob' => $faker->dateTimeBetween('-50 years', '-40 years'),
                'phone' => $faker->phoneNumber,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'email' => 'toanngo123@fpt.edu.vn',
                'password' => $faker->password,
                'fname' => 'Ngo',
                'lname' => 'Toan',
                'dob' => $faker->dateTimeBetween('-50 years', '-40 years'),
                'phone' => $faker->phoneNumber,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'email' => 'thieutoan123@fpt.edu.vn',
                'password' => $faker->password,
                'fname' => 'Thieu',
                'lname' => 'Toan',
                'dob' => $faker->dateTimeBetween('-50 years', '-40 years'),
                'phone' => $faker->phoneNumber,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],

        ]);

        DB::table('exams')->insert([
            [
                'exam_type_id' => 1,
                'training_department_id' => 1,
                'subject_id' => 1,
                'start_date' => '2021-01-15',
            ],
            [
                'exam_type_id' => 1,
                'training_department_id' => 1,
                'subject_id' => 2,
                'start_date' => '2021-01-30',
            ],
            [
                'exam_type_id' => 2,
                'training_department_id' => 1,
                'subject_id' => 1,
                'start_date' => '2021-02-08',
            ],
            [
                'exam_type_id' => 1,
                'training_department_id' => 2,
                'subject_id' => 3,
                'start_date' => '2020-12-24',
            ],
            [
                'exam_type_id' => 2,
                'training_department_id' => 1,
                'subject_id' => 2,
                'start_date' => '2021-03-21',
            ],
            [
                'exam_type_id' => 2,
                'training_department_id' => 1,
                'subject_id' => 1,
                'start_date' => '2021-02-11',
            ],
            [
                'exam_type_id' => 1,
                'training_department_id' => 2,
                'subject_id' => 3,
                'start_date' => '2021-04-01',
            ]
        ]);

        DB::table('exam_types')->insert([
            [
                'name' => 'Bai kiem tra giua ki',
            ],
            [
                'name' => 'Bai kiem tra cuoi ki',
            ]
        ]);

        DB::table('students')->insert([
            [
                'grade_id' => 1,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'grade_id' => 1,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'grade_id' => 1,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 2,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'grade_id' => 2,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 2,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'grade_id' => 3,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 1,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'grade_id' => 3,
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'dob' => $faker->dateTimeBetween('-30 years', '-20 years'),
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'date_of_join' => $faker->dateTimeBetween('-2 years', now()),
                'status' => 3,
                'last_login_date' => $faker->dateTimeBetween('-30 days', now()),
                'last_login_ip' => $faker->ipv4
            ],
        ]);

        DB::table('teachers')->insert([
            [
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => 'Dang Kim',
                'lname' => 'Thi',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => 'Le Thi',
                'lname' => 'Ha',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4
            ],
            [
                'email' => $faker->email(),
                'password' => $faker->password(),
                'fname' => 'Vuong Van',
                'lname' => 'Vu',
                'dob' => $faker->dateTimeBetween('-50 years', '-30 years'),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address,
                'last_login_date' => $faker->dateTimeBetween('-1 years', now()),
                'last_login_ip' => $faker->ipv4
            ],
        ]);

        DB::table('visitors')->insert([
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 2,
                'entrance_mark' => rand(0, 10),
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 2,
                'entrance_mark' => rand(0, 10),
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 1,
                'entrance_mark' => 0,
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 3,
                'entrance_mark' => rand(0, 10),
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 3,
                'entrance_mark' => rand(0, 10),
            ],
            [
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'dob' => $faker->dateTimeBetween('-30 years', '-18 years'),
                'address' => $faker->address,
                'status' => 2,
                'entrance_mark' => rand(0, 10),
            ],
        ]);

        DB::table('exam_results')->insert([
            [
                'student_id' => 1,
                'exam_id' => 1,
                'mark' => 8
            ],
            [
                'student_id' => 2,
                'exam_id' => 1,
                'mark' => 9
            ],
            [
                'student_id' => 3,
                'exam_id' => 1,
                'mark' => 10
            ],
            [
                'student_id' => 1,
                'exam_id' => 2,
                'mark' => 8
            ],
            [
                'student_id' => 2,
                'exam_id' => 2,
                'mark' => 5
            ],
            [
                'student_id' => 3,
                'exam_id' => 2,
                'mark' => 5
            ],
        ]);

//        DB::table('visitor_statuses')->insert([
//            [
//                'description' => 'Đã đăng ký học'
//            ],
//            [
//                'description' => 'Đang đăng ký học'
//            ],
//            [
//                'description' => 'Đã hủy đăng ký học'
//            ]
//        ]);
    }

    public function randomNumberSequence($requiredLength = 6, $highestDigit = 9): string
    {
        $sequence = '';
        for ($i = 0; $i < $requiredLength; ++$i) {
            $sequence .= mt_rand(0, $highestDigit);
        }
        return $sequence;
    }
}