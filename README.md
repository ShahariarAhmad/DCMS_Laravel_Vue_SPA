My main project is DCMS ...

Link: [DCMS_Laravel](https://github.com/ShahariarAhmad/DCMS_Laravel)



This current repository is basically a tiny portion of the original DCMS. I just wanted to learn & practice Vue Js without wasting time creating brand new projects. 



To understand how DCMS work and which action does what and leads to where, please read Main DCMS Basic Documentation. 



****Notable technology used****

* Laravel 9
* Vite
* Vue Js 3 
* Axios
* Sweet Alert 2



****Things that I will implement in the near future****

* Vuex
* Nuxt Js
* Sanctum
* Laravel Dusk



****Database****

* MySQL
* Database is normalized up to NF-3 



****Note about database design :**** 

* Few unused columns and foreign keys can be found because this Database originally belongs to my [DCMS_Laravel](https://github.com/ShahariarAhmad/DCMS_Laravel) projects. 
* I just modified my original DCMS database design a bit to make it workable for this project. 
* I left most parts untouched in the migration file to avoid unnecessary hassle. 
* So the database design flaws you might notice in this project are left there intentionally.
* Check [DCMS_Laravel](https://github.com/ShahariarAhmad/DCMS_Laravel) design. It's perfect!




****Few lacking in this app that is intentional.****

* No form validation implemented. Because I didn't want to waste time doing things that I already knew. 
* Not 100% responsive. Because I didn't want to waste my time making it responsive. Already know how to do it with Tailwind & Bootstrap. 
* But in a dummy project like this one, I don't maintain clean coding. Learning is the only purpose this dummy project has. **But I write clean code in production**. 






****How to run this project?****

Step: 1

- Make sure you have node, and composer installed. 
- You can use any local server.

Step: 2

Inside the project, folder run these commands

* npm install
* composer update
* run 'npm run dev' and 'php artisan serve'



Note: 

* App URL in .ENV file must include the port number. ( Eg.  http://localhost:8000 ) .... **Without this Resource links will be broken**. 
* I refractor this git repo & fix bugs whenever I get some free time. 





****Custom License****

* You are only allowed to use it for your own learning purpose in a non-commercial & private manner. 

* You are not allowed to reupload this project or a customized version of it anywhere.
