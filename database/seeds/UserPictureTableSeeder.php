<?php

use Illuminate\Database\Seeder;

class UserPictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 

    { 

         

        $data = [ 

1,'panda1', 

2,'panda2', 

3,'panda3', 

4,'panda4', 

5,'panda5', 

6,'panda6', 

7,'panda7', 

8,'panda8', 

9,'panda9', 

10,'panda1', 

11,'panda2', 

12,'panda3', 

13,'panda4', 

14,'panda5', 

15,'panda6', 

16,'panda7', 

17,'panda8', 

18,'panda9', 

19,'panda1', 

20,'panda2', 

21,'panda3', 

22,'panda4', 

23,'panda5', 

24,'panda6', 

25,'panda7', 

26,'panda8', 

27,'panda9', 

28,'panda1', 

29,'panda2', 

30,'panda3', 

31,'panda4', 

32,'panda5', 

33,'panda6', 

34,'panda7', 

35,'panda8', 

36,'panda9', 

37,'panda1', 

38,'panda2', 

39,'panda3', 

40,'panda4', 

41,'panda5', 

42,'panda6', 

43,'panda7', 

44,'panda8', 

45,'panda9', 

46,'panda1', 

47,'panda2', 

48,'panda3', 

49,'panda4', 

50,'panda5', 

51,'panda6', 

52,'panda7', 

53,'panda8', 

54,'panda9', 

55,'panda1', 

56,'panda2', 

57,'panda3', 

58,'panda4', 

59,'panda5', 

60,'panda6', 

61,'panda7', 

62,'panda8', 

63,'panda9', 

64,'panda1', 

65,'panda2', 

66,'panda3', 

67,'panda4', 

68,'panda5', 

69,'panda6', 

70,'panda7', 

71,'panda8', 

72,'panda9', 

73,'panda1', 

74,'panda2', 

75,'panda3', 

76,'panda4', 

77,'panda5', 

78,'panda6', 

79,'panda7', 

80,'panda8', 

81,'panda9', 

82,'panda1', 

83,'panda2', 

84,'panda3' 

]; 

 

 

// 8をカラム数に変更 

        $i = 0; 

        $data[2*$i+0]; //user_id  

        $data[2*$i+1]; // user_picture 

 

         

        for($i=0; $i<84; $i++) { 

            DB::table('user_pictures')->insert([ 

                'user_id' => $data[2*$i+0], 

                'user_picture' => $data[2*$i+1], 

                 

]); 

             

        } 

    } 
}
