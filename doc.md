this the  RMS  documantaions  

#how  to  make  a fake  data  
#    -by  faker this  a blugin  in laravel  url  "https://github.com/fzaninotto/Faker"
#    1-first  go  to  database/factories/ModelFactory.php and adjust the  what  wanna insert  in       the table 
#    2-go to  the Route and  add  the  route  of  ModelFactory to  run  whan the run  add this         "factory(App\User::class,5)->create();"

#   -There is  another  way by uesing "php artisan tinker" after  that  you  will  see the shell       write  this  in the shell "factory ('App\User',100)->make()" this  will meke  the fake           data but  not  save  them  in  the  database to  save them                                         "factory ('App\User',100)->create()"


#   -There is  another  way by uesing seed database/Seeder/DatabaseSeeder.php  but  this in the       file  "factory(App\User::class,5)->create();" and  go to  tirmainl  and  run  this                  "php artisan db:seed"
    