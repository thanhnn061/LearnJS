<?php
$images = [
    "https://nld.mediacdn.vn/thumb_w/540/2020/5/29/doi-hoa-tim-8-15907313395592061395682.png",
    "https://baovemoitruong.org.vn/wp-content/uploads/2019/04/2190413_Sun-World-Fansipan-Legend.jpg",
    "https://image.vtc.vn/files/phuongly/2019/04/13/4-sun-world-fansipan-legend-4-1109571.jpg",
    "https://phanmemquanly.hanoitourist.online/web/image/139032",
    "https://luhanhvietnam.com.vn/du-lich/vnt_upload/news/05_2019/vuon-hoa-oai-huong-sapa-2.jpg",
    "https://bizweb.dktcdn.net/100/387/186/articles/20161027151652790.jpg?v=1588926082500",
    "http://yourdalat.com/wp-content/uploads/2019/05/Canh_dong_hoa_Lavender3.jpg",
    "https://image-us.eva.vn/upload/3-2020/images/2020-07-23/hoa-hau-nguoi-viet-the-gioi-ha-my-dep-nhu-tien-nu-giua-canh-dong-hoa-lavender-1-1595495438-899-width660height440.jpg",
    "https://1.bp.blogspot.com/-yse7OhSgGKA/WrHVJ98a_NI/AAAAAAAAM4g/zivQnW_t7JkIx_YkWfoy5_5d_o9LQ9PiwCLcBGAs/s1600/photo-1499901527025-f694d5887dd4.jpg",
    "https://vtv1.mediacdn.vn/thumb_w/650/2019/12/14/11-1576261157202688609933.jpg",
    ];
    
// Start the session
session_start();

// Check ko hinh nao hien 2 lan lien tiep
if(isset($_SESSION["imagesChoosed"]) && count($_SESSION["imagesChoosed"]) == 10) {
    $_SESSION["imagesChoosed"] = array_slice($_SESSION["imagesChoosed"], 8, 2);
}

// Lay ngau nhien 2 index bat ky trong mang images (ko lap lai index da lay)
do {
    $random_keys=array_rand($images,2);
} while(checkExist($random_keys));


// Luu lai cac index da lay
foreach ($random_keys as $item) {
    if(!isset($_SESSION["imagesChoosed"]))
     $_SESSION["imagesChoosed"]=[];
    array_push($_SESSION["imagesChoosed"], $item);
}

// Ham check ko lap lai index
function checkExist($keys) {
    if(!isset($_SESSION["imagesChoosed"])) return false;
    
    for($i=0; $i< count($keys); $i++) {
        if(in_array($keys[$i], $_SESSION["imagesChoosed"])) {
            return true;
        }
    }
    
    return false;
}
?>
<div>
	<?php
	// in ra mang images
    foreach ($random_keys as $item) {
        ?>
        <img src="<?php echo $images[$item]; ?>" width="300px" />
        <p><?php echo $item; ?></p>
        <?php
    }
	?>
	
</div>
