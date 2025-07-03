<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>INVENTORY</title>
    <link rel="stylesheet" href="includes/style.css" />
    <link
        href="https://cdn.boxicons.com/fonts/basic/boxicons.min.css"
        rel="stylesheet" />
</head>

<body class="sb-expanded">
    <aside>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        <i class="bx-home-circle"> </i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="product.php">
                        <i class="bx-package"> </i>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx-warehouse "> </i>
                        <span>Stok</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx-receipt"> </i>
                        <span>Penjualan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx-calculator"> </i>
                        <span>Kasir</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx-cog"> </i>
                        <span>Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-resize-btn>
                        <i class="bx-arrow-right-stroke-square"> </i>
                        <span>Collapse</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <script>
        const resizeBar = document.querySelector("[data-resize-btn]");

        resizeBar.addEventListener("click", function(e) {
            e.preventDefault();
            document.body.classList.toggle("sb-expanded");
        });
    </script>
</body>

</html>