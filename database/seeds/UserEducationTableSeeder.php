<?php

use Illuminate\Database\Seeder;

class UserEducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 

    { 

         

        $data = [ 

1,'東京大学','環境エネルギー', 

2,'東京工業大学','機械物理工学', 

3,'上智大学','外国語学部', 

4,'University of Uta','Public health', 

5,'日本女子大学','数学', 

6,'東京大学','環境エネルギー', 

7,'東京工業大学','機械物理工学', 

8,'上智大学','外国語学部', 

9,'University of Uta','Public health', 

10,'日本女子大学','数学', 

11,'東京大学','環境エネルギー', 

12,'東京工業大学','機械物理工学', 

13,'上智大学','外国語学部', 

14,'University of Uta','Public health', 

15,'日本女子大学','数学', 

16,'東京大学','環境エネルギー', 

17,'東京工業大学','機械物理工学', 

18,'上智大学','外国語学部', 

19,'University of Uta','Public health', 

20,'日本女子大学','数学', 

21,'東京大学','環境エネルギー', 

22,'東京工業大学','機械物理工学', 

23,'上智大学','外国語学部', 

24,'University of Uta','Public health', 

25,'日本女子大学','数学', 

26,'東京大学','環境エネルギー', 

27,'東京工業大学','機械物理工学', 

28,'上智大学','外国語学部', 

29,'University of Uta','Public health', 

30,'日本女子大学','数学', 

31,'東京大学','環境エネルギー', 

32,'東京工業大学','機械物理工学', 

33,'上智大学','外国語学部', 

34,'University of Uta','Public health', 

35,'日本女子大学','数学', 

36,'東京大学','環境エネルギー', 

37,'東京工業大学','機械物理工学', 

38,'上智大学','外国語学部', 

39,'University of Uta','Public health', 

40,'日本女子大学','数学', 

41,'東京大学','環境エネルギー', 

42,'東京工業大学','機械物理工学', 

43,'上智大学','外国語学部', 

44,'University of Uta','Public health', 

45,'日本女子大学','数学', 

46,'東京大学','環境エネルギー', 

47,'東京工業大学','機械物理工学', 

48,'上智大学','外国語学部', 

49,'University of Uta','Public health', 

50,'日本女子大学','数学', 

51,'東京大学','環境エネルギー', 

52,'東京工業大学','機械物理工学', 

53,'上智大学','外国語学部', 

54,'University of Uta','Public health', 

55,'日本女子大学','数学', 

56,'東京大学','環境エネルギー', 

57,'東京工業大学','機械物理工学', 

58,'上智大学','外国語学部', 

59,'University of Uta','Public health', 

60,'日本女子大学','数学', 

61,'東京大学','環境エネルギー', 

62,'東京工業大学','機械物理工学', 

63,'上智大学','外国語学部', 

64,'University of Uta','Public health', 

65,'日本女子大学','数学', 

66,'東京大学','環境エネルギー', 

67,'東京工業大学','機械物理工学', 

68,'上智大学','外国語学部', 

69,'University of Uta','Public health', 

70,'日本女子大学','数学', 

71,'東京大学','環境エネルギー', 

72,'東京工業大学','機械物理工学', 

73,'上智大学','外国語学部', 

74,'University of Uta','Public health', 

75,'日本女子大学','数学', 

76,'東京大学','環境エネルギー', 

77,'東京工業大学','機械物理工学', 

78,'上智大学','外国語学部', 

79,'University of Uta','Public health', 

80,'日本女子大学','数学', 

81,'東京大学','環境エネルギー', 

82,'東京工業大学','機械物理工学', 

83,'上智大学','外国語学部', 

84,'University of Uta','Public health' 

 

]; 

 

 

// 8をカラム数に変更 

        $i = 0; 

        $data[3*$i+0]; //user_id  

        $data[3*$i+1]; //univ 

        $data[3*$i+2]; // major 

 

         

        for($i=0; $i<84; $i++) { 

            DB::table('user_educations')->insert([ 

                'user_id' => $data[3*$i+0], 

                'university' => $data[3*$i+1], 

                'major' => $data[3*$i+2], 

                ]); 
        } 

    } 
}
