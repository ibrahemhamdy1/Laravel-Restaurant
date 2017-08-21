this the  RMS  documantaions  

#how  to  make  a fake  data  
#    -by  faker this  a blugin  in laravel  url  "https://github.com/fzaninotto/Faker"
#    1-first  go  to  database/factories/ModelFactory.php and adjust the  what  wanna insert  in       the table 
#    2-go to  the Route and  add  the  route  of  ModelFactory to  run  whan the run  add this         "factory(App\User::class,5)->create();"

#   -There is  another  way by uesing "php artisan tinker" after  that  you  will  see the shell       write  this  in the shell "factory ('App\User',100)->make()" this  will meke  the fake           data but  not  save  them  in  the  database to  save them                                         "factory ('App\User',100)->create()"


#   -There is  another  way by uesing seed database/Seeder/DatabaseSeeder.php  but  this in the       file  "factory(App\User::class,5)->create();" and  go to  tirmainl  and  run  this                  "php artisan db:seed"
    

//this  section when we  start  to make controller 
# -to  make menus controller with  his  methoed   write  "php  artisan make:controller  MenusController --resource"

#-compact() is not a Laravel function. It is a PHP function. It creates an array containing variables and their values.
//here  to  use  Form  in  laravel  
#to  use  Form   follw this  https://laravelcollective.com/docs/5.2/html
errors  
#1- i get  an  error that  telles me  ' Base table or view not found: 1146 Table 'rms.meal_items' doesn't exist' 
#   -this  Laravel can't determine the table name  i add this line '        public $table = "meal_item";'     in the  modle MealItem  