<?php
  include_once("Templates/header.php");
  if(isset($_GET['id'])){
      $postId = $_GET['id'];
      $currentPost;
      foreach($posts as $post){
          if($post['id'] == $postId){
            $currentPost = $post;
          }
      }
  }
?>
    <main>
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque unde nemo accusantium incidunt quaerat harum cupiditate atque officiis debitis ad explicabo saepe iusto voluptas assumenda adipisci, ipsam molestiae expedita quasi?
            Fuga dolorum est repellendus beatae placeat sed nobis eveniet, ipsum sapiente quisquam eaque eligendi totam doloribus, doloremque quo hic aut enim quibusdam commodi. Vero, perspiciatis deserunt? Commodi repudiandae expedita architecto.
            Qui optio aperiam dolor nostrum doloremque tempore quos accusantium nam adipisci dignissimos mollitia, cupiditate officiis! Iusto cumque dicta ut? Sequi libero autem, ipsum incidunt maxime voluptatum sint recusandae necessitatibus doloremque!
            Quia alias non molestias delectus eos ullam. Temporibus quibusdam laudantium harum dicta laborum commodi esse sunt quidem provident dolorem architecto rem cum voluptatum, cupiditate similique ullam obcaecati quaerat. Harum, possimus.
            Ipsa saepe eos beatae cupiditate? Dolorum soluta quis officiis laborum at alias neque natus voluptates aliquid, provident veritatis vitae reiciendis nemo! Libero quaerat aliquam nesciunt minus, ut recusandae illum dignissimos!</p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
              <li><a href="#"><?=$tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
              <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
<?php
  include_once("Templates/footer.php")
?>