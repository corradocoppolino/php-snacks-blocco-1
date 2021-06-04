<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<body>
    
    <?php 
    
        $paragraf = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio praesentium atque deserunt provident at ad eveniet cum, suscipit laudantium soluta culpa corporis possimus, sequi, obcaecati reprehenderit numquam molestias aspernatur qui? Iure adipisci hic laborum doloremque est quod, animi debitis ipsum minima nisi accusantium dicta temporibus fugiat repellat nulla officiis repudiandae magni expedita, a ratione voluptate velit. Culpa esse, libero sed voluptates, odit impedit mollitia beatae ut, facere obcaecati corrupti repellendus vitae ex quisquam atque omnis dignissimos deleniti pariatur quo tenetur assumenda aliquam labore hic? Asperiores neque veritatis adipisci quae nemo ab, repellat laudantium autem quisquam, fugit animi eaque corporis possimus beatae. Similique ut, cupiditate tempore eum eos corporis magni sapiente reiciendis impedit corrupti voluptates optio at quidem atque? Ipsum aliquam, placeat error illum quae quo. Placeat totam esse dolor inventore quaerat eum mollitia laborum! Explicabo, quia cum nemo officia ea et corrupti cupiditate at ad odio animi nisi culpa tempore voluptatum debitis in voluptatem qui modi dolor iusto! Dicta ea mollitia inventore, vel molestiae quis eligendi optio alias reiciendis ducimus doloribus omnis nisi aperiam libero eaque? Ipsam autem sequi ex debitis? Ducimus accusantium, nesciunt possimus dolorem laboriosam id cumque perspiciatis consectetur atque iusto doloribus quo incidunt ratione itaque fuga molestias necessitatibus numquam, accusamus corrupti, nostrum molestiae asperiores sit autem aliquam! Amet tenetur voluptatibus temporibus quas vitae cumque facilis pariatur repellat adipisci sint ratione modi vel est a necessitatibus ipsam tempora minima, mollitia odit accusamus vero iste. Consequatur laborum, nostrum quas magnam soluta provident minus perspiciatis exercitationem non aspernatur adipisci necessitatibus repellendus eveniet fugiat molestias quisquam dolore, ab labore omnis magni libero voluptas nihil praesentium! Ducimus non eaque reprehenderit libero tenetur similique sed perferendis. Quae dolor reprehenderit modi ab. Incidunt quis eaque necessitatibus temporibus adipisci. Doloribus illum possimus laborum. Laboriosam, cupiditate nulla. Labore quasi eveniet ut, odit repudiandae consequatur illo dolores architecto, facilis porro eligendi officiis officia odio vitae aliquam molestiae nostrum obcaecati minima quidem? Numquam, nam in, et unde dicta illum perferendis accusamus nemo possimus maiores voluptatem nesciunt facere at quas, aut fugiat tempore tempora. Nemo molestiae consequatur necessitatibus voluptatum nobis est veritatis aliquam eius fugiat repellat quos perspiciatis maiores non, dicta sapiente ex soluta qui eaque autem perferendis? Quis architecto, qui dolorem aut dignissimos perferendis accusantium excepturi quasi quisquam, neque corporis consequuntur quam enim? Eius id ratione cupiditate sint facilis accusamus dicta labore quo at, minus ullam in nulla distinctio quod vel dolores officia animi hic quibusdam itaque repellendus explicabo eos. Est repellendus perspiciatis dignissimos architecto tempora expedita culpa, similique dicta ipsa, omnis ad! Totam eligendi quos recusandae quasi obcaecati necessitatibus illum quam praesentium doloremque deserunt architecto excepturi, ratione ipsam eveniet blanditiis accusamus asperiores. Est omnis animi voluptatum harum quaerat vero quibusdam ullam consectetur, similique voluptatibus, distinctio nisi quisquam itaque quasi ratione, consequuntur nam officiis dolorem magni praesentium modi rerum nesciunt? Fugiat tenetur necessitatibus deserunt atque dolorem ut deleniti repellat velit, a, provident, voluptatum rem natus facere voluptatibus ab! Repudiandae reprehenderit, cum error vero delectus ducimus temporibus doloremque suscipit voluptates voluptatem soluta sapiente inventore! Beatae deserunt consectetur repellendus sunt?";

        $exploded = explode(".",$paragraf);

    
    ?>

    <ul>

        <h1>PARAGRAFO COMPLETO</h1>
    
        <li> <p> <?php echo $paragraf ?> </p> </li>

        <h1>PARAGRAFO SPEZZATO</h1>

        <?php foreach ($exploded as $index) { ?>

            <li> <p> <?php echo $index ?> </p> </li>

        <?php } ?>
    
    </ul>



</body>
</html>