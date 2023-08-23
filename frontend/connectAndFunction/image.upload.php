<?php  



// function image upload 
    function image_upload(){

        // ambil semua valu image dari $_FILES dan tampung ke dalam sebuah variable
            $imageName          = $_FILES['image']['name'];
            $imageType          = $_FILES['image']['type'];
            $imageTmp_name      = $_FILES['image']['tmp_name'];
            $imageError         = $_FILES['image']['error'];

        // mengharuskan user mengupload image 
            if ($imageError == 4) {

                // tampilkan notifikasi bahwa gambar harus terisi
                    echo"<script>
                            alert('upload gambar untuk memenui persyaratan');
                        </script>";

                 return false;
            }

        // lakukan sebuah pengecekan tipe data pada image
            // siapkan ekstensi gambar yang di perbolehkan dalam bentuk sebuah array
            $ekstensiGambarOk = ['image/png',
                                'image/jpg',
                                'image/jpeg',
                                'image/webp'];

            // cek ekstensi gambar ada dalam imageTypeValid
                if (!in_array($imageType, $ekstensiGambarOk)) {
                    
                    // tampilkan pesan bahwa yang di upload harus gambar
                    echo"<script>
                                alert('gambar gagal di upload. pastikan yang kamu upload adalah gambar');
                            </script>";

                    return false;
                }


            // bangkitkan bilangan random untuk nama gambar supaya tidak terjadi duplikasi gambar
                // bangkitkan bilangan random untuk menggantikan name dari sebuah image
                    $randomName     = uniqid();

                // pecah nama file dan ekstensi filenya menggunakan expload()
                    $imageCut       = explode('.', $imageName);   
                
                // ambil array value terakhir untuk mengambil ekstensi gambar
                    $imageExtension       = end($imageCut);

                // gabungkan $randomName dengan $imageExtension
                    $imageNameRandom = $randomName.'.'.$imageExtension;
                    
                // upload gambar ke folder 
                    move_uploaded_file($imageTmp_name, '../../../images/'. $imageNameRandom);

                // return variable $imageNameRandom untuk memasukan name gambar ke dalam database
                    return $imageNameRandom;
    }





















?>