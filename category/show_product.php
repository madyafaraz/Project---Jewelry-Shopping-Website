<?php 
include('includes/header.php');
include('includes/banner.php');?>

<main>
<ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?categoryID=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
</main>

<?php include('includes/footer.php'); ?>