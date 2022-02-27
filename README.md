project1_sma

Project ini berisi tentang pembagian jurusan pada suatu sekolah SMA, yang dimana terdapat 2 tabel yaitu tabel major untuk jurusan dan tabel student untuk siswa.
Tiap -  tiap tabel memiliki 1 primary key, untuk tabel major primary keynya adalah id_major sedangkan untuk tabel student primary keynya adalah id_student.
Id_major dijadikan foreign key di dalam tabel student untuk menandakan hubungan tabel yang satu dengan yang lainnya.


Database 
![project1_sma](https://user-images.githubusercontent.com/72928507/155831360-bfef89fb-ddb8-4549-9a0a-b173ad1e7035.png)


1. Migrations : 

Migrations - Major_Table
![migrations - major](https://user-images.githubusercontent.com/72928507/155869205-bc9d8f2d-1d7b-427a-a73b-226eafdd1c04.png)

Migrations - Student_Table
![migrations - student](https://user-images.githubusercontent.com/72928507/155869222-7f0326cc-4d23-4b4b-91c3-4a84f6ef91ac.png)


2. Models :

Models - Major
![models - major](https://user-images.githubusercontent.com/72928507/155869345-97148bfd-de90-4605-8356-51f7b9be3e31.png)

Models - Student
![models - student](https://user-images.githubusercontent.com/72928507/155869350-83fa448f-81fb-46ac-a32c-dbfac30736ff.png)

Models User 
![models - user](https://user-images.githubusercontent.com/72928507/155869356-a374ba5f-b527-4dc8-b38f-113ca0b997b0.png)


3. Controllers 

Controllers - MajorController

=> Show & Detail
![controllers - major (show   detail)](https://user-images.githubusercontent.com/72928507/155869385-b97d8019-7148-4fc3-b48f-ddc65f61a785.png)

=> Store
![controllers - major (store)](https://user-images.githubusercontent.com/72928507/155869392-772cead8-7420-4d8c-8224-469a26e181ec.png)

=> Update
![controllers - major (update)](https://user-images.githubusercontent.com/72928507/155869398-d6d180f9-6598-4995-8e08-984c21546d19.png)

=> Destroy 
![controllers - major (destroy)](https://user-images.githubusercontent.com/72928507/155869402-637bd3fd-ca15-4de6-b961-f1cb46366f4f.png)
 
 Controllers - StudentController
 
 => Show & Detail
 ![controllers - student (show   detail)](https://user-images.githubusercontent.com/72928507/155869431-a7bf8033-dce3-48e4-a030-b5ddc448cd40.png)
 
 => Store
![controllers - student (store)](https://user-images.githubusercontent.com/72928507/155869434-2f3039cb-4323-4c26-a5bd-18a5ba93ede5.png)

=> Update
![controllers - student (update) (1)](https://user-images.githubusercontent.com/72928507/155869441-0af72ec0-08c6-41b2-a666-58091b1300fb.png)
![controllers - student (update) (2)](https://user-images.githubusercontent.com/72928507/155869443-b60c7531-96ce-4cdb-8043-b8bd17d79f7b.png)

=> Destory 
![controllers - student (destroy)](https://user-images.githubusercontent.com/72928507/155869450-3ce26a87-dcd8-4b7b-a02a-e5feee479063.png)


4. Middleware : 

JwtMiddleware
![Middleware - JwtMiddleware](https://user-images.githubusercontent.com/72928507/155869458-042e5f12-4e5e-4fb7-985e-774f9a6ee0a8.png)


5. Config :

App
![config - app (1)](https://user-images.githubusercontent.com/72928507/155869492-ccc56408-219f-432b-99f0-f7ef81e88742.png)
![config - app (2)](https://user-images.githubusercontent.com/72928507/155869499-2d476256-6661-49c4-848d-f6520ca3325e.png)


6. Route : 

Api
![route - api](https://user-images.githubusercontent.com/72928507/155869511-e07f8cc1-5be7-4a86-bf88-fe1b962138b0.png)
