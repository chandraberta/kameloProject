<?php
class Login_test {
	
        public function test_aksi_login() //user benar password benar (ADMIN)
    {    
        $output = $this->request('POST', 'Login/aksi_login', 
					['username' => 'admin',
					 'password' => 'admin123'
					 ]);
        $this->assertEquals('admin', $_SESSION['username'], $output);
        $this->assertRedirect('admin');
    }
    
    
    public function test_aksi_login_bukanuser() //user salah password salah (ADMIN)
    {
        $output = $this->request('POST', 'Login/aksi_login',
                [
                    'username' => 'admin1',
                    'password' => 'admin1',
                ]);
        
        $this->assertFalse(isset($_SESSION['username'], $output));
        $this->assertRedirect('Login');
    }
	
	
    public function test_aksi_login_kosong(){ //user passwd kosong
        $this->request('POST', 'Login/aksi_login',
                [
                    'username' => '',
                    'password' => '',
                ]);
        $this->assertFalse(isset($_SESSION['username']));
        $this->assertRedirect('Login');
    }
  
}