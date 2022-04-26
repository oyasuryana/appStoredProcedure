# appStoredProcedure
Contoh penggunaan stored procedure mysql di codeigniter 3, lebih jauh tentang stored procedure dapat dibaca pada artikel  http://ozs.web.id/2016/12/membuat-stored-procedure-di-mysql/

## Instalasi
1. download script
2. Extract script di c:\xampp\htdocs
3. Buat database perpustakaan di mysql
4. Import file perpustakaan.sql
5. Edit file config.php di folder application\config
   * edit bagian
    $config['base_url'] = 'http://localhost:8081/';
   * menjadi 
    $config['base_url'] = 'http://localhost/appStoredProcedure/';
5. Edit file database.php di folder application\config
    * edit bagian :
        'username' => 'user_sql',
	    'password' => '123',
    * menjadi :
        'username' => 'root',
	    'password' => '',
6. Jalankan browser akses url http://localhost/appStoredProcedure/        
    

