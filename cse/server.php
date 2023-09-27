<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
        <link rel="icon" href="im/IITGN.png" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="css/style(Server).css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
        <title>IITGN CSE | Server</title>
        <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    </head>
<body class="bg-dak">

<!-- =======================S-HEADER===================== -->
<?php include_once "Header.php"?>
<!-- ============================E-HEADER================= -->

<div class="server">
    <h2 style="text-align: center;"> Lab<br> Resources</h2>
</div>

<div class="card">
    <div class="card-body">
        
        <p class="card-text" style="text-align: justify;">
                <div class="container">
                    <div class="accordion">
                        <div class="accordion-content">
                            <header>
                                <span class="title">
                                    <i class="fa-solid fa-server fa-lg"></i>&nbsp;Turing Cluster :
                                </span>
                                <i class="fa-solid fa-plus"></i>
                            </header>

                            <p class="escription">
                                &nbsp;<br>
                                    - Processor:2 x Intel Xeon Silver 4110 <br>   
                                    - CPU Cores: 2 x 8Cores<br>
                                    - Memory: 128GB<br>
                                    - HDD: 2 x 1TB<br>
                                    - SSD: 256GB<br>
                            </p>
                        </div>

                    <div class="accordion-content">
                        <header>
                            <span class="title"><i class="fa-solid fa-server fa-lg"></i> &nbsp;Hamilton Cluster:</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>

                        <p class="escription">
                            <br>
                            - Processor:2 X Intel Xeon Silver 4216<br>   
                            - CPU Cores: 2 x 16 Cores<br>
                            - Memory: 64GB + 2X32GB(update)<br>
                            - HDD:2 x 4TB<br>
                            - SSD: 2 x 256GB<br>
                            - GPU :2xNVIDIA RTX 5000<br>
                        </p>
                    </div>
                    
            
                </div>
            </div>

        </p>
    </div>
</div>

<script>

        const accordionContent = document.querySelectorAll(".accordion-content");

        accordionContent.forEach((item, index) => {
            let header = item.querySelector("header");
            header.addEventListener("click", () =>{
                item.classList.toggle("open");

                let description = item.querySelector(".description");
                if(item.classList.contains("open")){
                    description.style.height = `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin
                    item.querySelector("i").classList.replace("fa-plus", "fa-minus");
                }else{
                    description.style.height = "0px";
                    item.querySelector("i").classList.replace("fa-minus", "fa-plus");
                }
                removeOpen(index); //calling the funtion and also passing the index number of the clicked header
            })
        })

        function removeOpen(index1){
            accordionContent.forEach((item2, index2) => {
                if(index1 != index2){
                    item2.classList.remove("open");

                    let des = item2.querySelector(".description");
                    des.style.height = "0px";
                    item2.querySelector("i").classList.replace("fa-minus", "fa-plus");
                }
            })
        }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
</script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
</script>

<!-- ============================S-FOOTER================= -->
<?php include_once "Footer.php" ?>
<!-- ============================E-FOOTER================= -->

    
</body>
</html>