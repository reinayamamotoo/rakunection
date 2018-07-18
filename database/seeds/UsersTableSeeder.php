<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 

    { 

         

        $data = [ 



//'Honda','Honda','Honddsaa','honda@rakuten.com','自己紹介では「自分の強みをアピールしなくては」と気構えることなく、挨拶の一環と考えましょう。','Cycling Club','Japan','新卒', 

//'Tetsuko','Tetsuko','Tetsukfaso','tetsuko@rakuten.com','なかには自分をアピールしなくてはと考え、「サークルの副将の経験を通して、リーダーシップ培ってきました。','Robot Club','Japan','新卒', 

'Tamago','Tamago','Tamagsdfao','tamago@rakuten.com','仕事でもこのリーダーシップを生かして…」など、自己PRを始めてしまう人もいます。','Golf Club','Japan','新卒', 

'Pi-man','Pi-man','Pimadsafn','pi-man@rakuten.com','意気込んで話したくなる気持ちもわかりますが、どういうことをやりたいかという意欲は、その後の面接担当者とのやりとりの中で伝えていけば大丈夫です。','Badminton Club','Japan','新卒', 

'Noritama','Noritama','Noritamada','noritama@rakuten.com','自己紹介の伝え方のコツ','Wine Club','Japan','新卒', 

'Gomashio','Gomashio','Gomashiosdaf','gomashio@rakuten.com','プロフィール＋学生時代にやってきたことを伝えよう','Servival Game Club','Japan','新卒', 

'Pochi','Pochi','Pochsdvai','pochi@rakuten.com','自己紹介では、簡単なプロフィールと学生時代に何をしてきたかを紹介しましょう。?プロフィールとして伝えるのは、名前、学校名、学部名、学年などの基本的な情報です。','Handmade Club','Japan','中途', 

'Hachi','Hachi','Hachrfi','hachi@rakuten.com','ゼミやサークル、アルバイトなど、特に力を入れてきた活動があれば、基本的な情報の後にひと言加えると良いでしょう。 あいさつの終わりの言葉については、「','Bowling Club','Japan','中途', 

'Tonkatsu','Tonkatsu','Tonkatsufr','tonkatsu@rakuten.com','本日は、よろしくお願いいたします」と述べる形で問題ありません。','Animal Society Club','Japan','新卒', 

'Yui','Yui','Yuirfkjf','yui@rakuten.com','表情・視線・言葉遣いも意識してみよう','Photo Club','Japan','新卒', 

'Pikachu','Pikachu','Pikachfru','pikachu@rakuten.com','自己紹介の内容も大切ですが、自己紹介を伝える際の表情・視線・言葉遣いも意識してみるとより良くなるでしょう。?','Design Lab Club','Japan','新卒', 

'Shinnosuke','Shinnosuke','Shinnosusdcke','shinnosuke@rakuten.com','表情は明るく、姿勢をまっすぐにして視線はしっかり相手を見て話しましょう。 顔を下に向けて話してしまうと、自信なさげで声も聞き取りづらくなってしまいますので注意しましょう。?','Surf Club','Japan','新卒', 

'Salmon','Salmon','Salmodsafn','salmon@rakuten.com','また、言葉遣いもポイントです。 学校や仲間内だけで使っている略語などは、相手に伝わらない場合もありますので、','Outdoor Club','Japan','新卒', 

'Emi','Emi','Emidwafs','emi@rakuten.com','「まったく知らない外部の人が聞いたときに、正しく・わかりやすく伝わるか？」を基準に言葉遣いを見直してみてください。?','Tennis Club','Japan','新卒', 

'Kanako','Kanako','Kanaksdafo','kanako@rakuten.com','（例） ? バドサーをやっていました。 ◯ バドミントンサークルに所属していました。 面接という場では緊張で余裕がなくなってしまうかもしれませんが、これらをほんの少し意識するだけでも違ってくると思います。','Yoga Club','Japan','新卒', 

'Hiro','Hiro','Hirsadfo','hiro@rakuten.com',null,'Baseball Club','Japan','中途', 

'Takumi','Takumi','Takumsadfi','takumi@rakuten.com',null,'Surf Club','Japan','中途', 

'Emma','Emma','Emmawqf','emma@rakuten.com',null,'Disney Club','Japan','新卒', 

'Olivia','Olivia','Oliviwqfa','olivia@rakuten.com',null,'Dragon Boat Club','Japan','新卒', 

'Isabella','Isabella','Isabellwfqa','isabella@rakuten.com',null,'Cycling Club','Japan','新卒', 

'Sophia','Sophia','Sophifaeqra','sophia@rakuten.com',null,'Robot Club','Japan','新卒', 

'Mia','Mia','Miadsafsf','mia@rakuten.com',null,'Golf Club','Japan','新卒', 

'Sharlotte','Sharlotte','Sharlottefas','sharlotte@rakuten.com',null,'Badminton Club','Japan','新卒', 

'John','John','Johfasn','john@rakuten.com',null,'Wine Club','Japan','新卒', 

'Robert','Robert','Robersadft','robert@rakuten.com',null,'Servival Game Club','Japan','中途', 

'Michael','Michael','Michaefadsl','michael@rakuten.com',null,'Handmade Club','Japan','中途', 

'William','William','Williaafsdm','william@rakuten.com',null,'Bowling Club','Japan','新卒', 

'David','David','Daviasfd','david@rakuten.com',null,'Animal Society Club','Japan','新卒', 

'Richard','Richard','Richardafsd','richard@rakuten.com',null,'Photo Club','Japan','新卒', 

'Joseph','Joseph','Josepafsdh','joseph@rakuten.com',null,'Design Lab Club','Japan','新卒', 

'Thomas','Thomas','Thomasafsd','thomas@rakuten.com',null,'Surf Club','Japan','新卒', 

'Charles','Charles','Charlesdfas','charles@rakuten.com',null,'Outdoor Club','Japan','新卒', 

'Christopher','Christopher','Christopherdfa','christopher@rakuten.com',null,'Tennis Club','Japan','新卒', 

'Daniel','Daniel','Daniefasl','daniel@rakuten.com',null,'Yoga Club','Japan','中途', 

'Matthew','Matthew','Matthesafdw','matthew@rakuten.com',null,'Baseball Club','Japan','中途', 

'Anthony','Anthony','Anthonsafy','anthony@rakuten.com',null,'Surf Club','Japan','新卒', 

'Donald','Donald','Donaafsld','donald@rakuten.com',null,'Disney Club','Japan','新卒', 

'Mark','Mark','Marafsk','mark@rakuten.com',null,'Dragon Boat Club','Japan','新卒', 

'Paul','Paul','Pausfal','paul@rakuten.com',null,'Cycling Club','Japan','新卒', 

'Steven','Steven','Stevefasn','steven@rakuten.com',null,'Robot Club','Japan','新卒', 

'Andrew','Andrew','Andrefasdfw','andrew@rakuten.com',null,'Golf Club','Japan','新卒', 

'Kenneth','Kenneth','Kennetsafsh','kenneth@rakuten.com',null,'Badminton Club','Japan','新卒', 

'George','George','Georgfase','george@rakuten.com',null,'Wine Club','Japan','中途', 

'Patricia','Patricia','Patricifasda','patricia@rakuten.com',null,'Servival Game Club','Japan','中途', 

'Jennifer','Jennifer','Jenniffasder','jennifer@rakuten.com',null,'Handmade Club','Japan','新卒', 

'Linda','Linda','Lindfasdfa','linda@rakuten.com',null,'Bowling Club','Japan','新卒', 

'Elizabeth','Elizabeth','Elizabetfasdfh','elizabeth@rakuten.com',null,'Animal Society Club','Japan','新卒', 

'Barbara','Barbara','Barbarfasda','barbara@rakuten.com',null,'Photo Club','Japan','新卒', 

'Susan','Susan','Susafasdfn','susan@rakuten.com',null,'Design Lab Club','Japan','新卒', 

'Jessica','Jessica','Jessicfasda','jessica@rakuten.com',null,'Surf Club','Japan','新卒', 

'Sarah','Sarah','Sarasdfah','sarah@rakuten.com',null,'Outdoor Club','Japan','新卒', 

'Margaret','Margaret','Margarefasdt','margaret@rakuten.com',null,null,'Japan','中途', 

'Karen','Karen','Karesafn','karen@rakuten.com',null,'Yoga Club','Japan','中途', 

'Nancy','Nancy','Nancasfdfay','nancy@rakuten.com',null,'Baseball Club','Japan','新卒', 

'Lisa','Lisa','Lisafsdfaa','lisa@rakuten.com',null,null,'Japan','新卒', 

'Betty','Betty','Bettsfady','betty@rakuten.com',null,'Disney Club','Japan','新卒', 

'Dorothy','Dorothy','Dorothyafsd','dorothy@rakuten.com',null,'Dragon Boat Club','Japan','新卒', 

'Sandra','Sandra','Sandrasfa','sandra@rakuten.com',null,'Cycling Club','Japan','新卒', 

'Ashley','Ashley','Ashlfasdey','ashley@rakuten.com',null,'Robot Club','Japan','新卒', 

'Kimberly','Kimberly','Kimberlfasdy','kimberly@rakuten.com',null,'Golf Club','Japan','新卒', 

'Donna','Donna','Donndsafa','donna@rakuten.com',null,'Badminton Club','Japan','中途', 

'Emily','Emily','Emilfasdfy','emily@rakuten.com',null,'Wine Club','Japan','中途', 

'Carol','Carol','Carofasdl','carol@rakuten.com',null,'Servival Game Club','Japan','新卒', 

'Michelle','Michelle','Michelfasle','michelle@rakuten.com',null,'Handmade Club','Japan','新卒', 

'Amanda','Amanda','Amanfasdda','amanda@rakuten.com',null,'Bowling Club','Japan','新卒', 

'Melissa','Melissa','Melissafasd','melissa@rakuten.com',null,'Animal Society Club','Japan','新卒', 

'Deborah','Deborah','Deborahsadf','deborah@rakuten.com',null,'Photo Club','Japan','新卒', 

'Stephanie','Stephanie','Stephanisafe','stephanie@rakuten.com',null,'Design Lab Club','Japan','新卒', 

'Rebecca','Rebecca','Rebeccafsa','rebecca@rakuten.com',null,'Surf Club','Japan','新卒', 

'Laura','Laura','Laursafda','laura@rakuten.com',null,'Outdoor Club','Japan','中途', 

'Helen','Helen','Helenfasd','helen@rakuten.com',null,'Tennis Club','Japan','中途', 

'Sharon','Sharon','Sharofasdn','sharon@rakuten.com',null,'Yoga Club','Japan','新卒', 

'Cynthia','Cynthia','Cynthiaasdf','cynthia@rakuten.com',null,'Baseball Club','Japan','新卒', 

'Kathleen','Kathleen','Kathleensdaf','kathleen@rakuten.com',null,'Surf Club','Japan','新卒', 

'Amy','Amy','Amsdaffy','amy@rakuten.com',null,'Disney Club','Japan','中途', 

'Shirley','Shirley','Shirleydsaf','shirley@rakuten.com',null,'Dragon Boat Club','Japan','中途', 

'Angela','Angela','Angelfasa','angela@rakuten.com',null,'Cycling Club','Japan','新卒', 

'Rich','Rich','Richsadfaf','rich@rakuten.com',null,'null','Japan','新卒' 

]; 

 

        $i = 0; 

        $data[8*$i+0]; //name  

        $data[8*$i+1]; //register name 

        $data[8*$i+2]; // password 

        $data[8*$i+3]; // email 

        $data[8*$i+4]; // comment 

        $data[8*$i+5]; // club 

        $data[8*$i+6]; // home country 

        $data[8*$i+7]; // tyuuto  

         

         

        for($i=0; $i<84; $i++) { 

            DB::table('users')->insert([ 

                'name' => $data[8*$i+0], 

                'register_name' => $data[8*$i+1], 

                'password' => $data[8*$i+2], 

                'email' => $data[8*$i+3], 

                'comment' => $data[8*$i+4], 

                'club' => $data[8*$i+5], 

                'homecountry' => $data[8*$i+6], 

                'tyuuto' => $data[8*$i+7], 
                
                'remember_token' => null,

                ]); 

             

        } 
    }

}
