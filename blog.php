<?php
if (!isset($included)) {
    include 'koneksi.php';
    $sql = "SELECT * FROM blog_posts ORDER BY post_date DESC";
    $result = $conn->query($sql);
    $included = true;
}
?>

<div class="blog-container">
    <?php
    if (isset($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='blog-item'>";
            echo "<article class='blog-post'>";
            echo "<header>";
            echo "<a href='" . $row['link_blog'] . "' target='_blank' rel='noopener noreferrer'><h3>" . $row['title'] . "</h3></a>";
            echo "<p class='post-meta'>" . $row['post_date'] . "</p>";
            echo "</header>";
            echo "<a href='" . $row['link_blog'] . "' target='_blank' rel='noopener noreferrer'><div class='blog-image' style='background-image: url(" . $row['image_url'] . ");'></div></a>";
            echo "<p>" . $row['content'] . "</p>";
            echo "</article>";
            echo "</div>";
        }
    } else {
        echo "Tidak ada posting blog.";
    }
    if (!isset($included)) {
        $conn->close();
    }
    ?>
</div>
