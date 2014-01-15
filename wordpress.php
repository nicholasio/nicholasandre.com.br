<?php 
$_page = "cursos";
include("header.php"); 

function is_selected($part, $default) {
    
    $_video = isset($_GET['video']) ? $_GET['video'] : null;
    $selected = false;
    if ( ($default && is_null($_video) ) || $part == $_video ) $selected = true;
    if ( !is_null($_video) &&$_video == $part ) $selected = true;
    
    if ( $selected ) echo " class='selected' ";
}
?>
	<div id="main">
		<div id="research" class="page">
	        <div class="pageheader">

	            <div class="headercontent">

	                <div class="section-container">
	                    <h2 class="title">Curso de Wordpress - Temas & Plugins</h2>
	                
	                    <!--<div class="row">
	 						<p>Confira alguns cursos disponibilizados gratuitamente que ministrei e aprenda algo novo!</p>
	 						 <blockquote>"Coletar dados é o primeiro passo para sabedoria, mas compartilhar dados é o primeiro passo para comunidade."</blockquote>
	                    </div>-->
	                </div>
	            </div>
	        </div>
			<div class="pagecontents">
				<div class="section color-1">
	                <div class="section-container">
                        <div class="video-wrapper col-md-12">
                            <p> No curso de Wordpress Temas & Plugins é apresentado de forma didática como se trabalhar com Wordpress para a criação de temas e plugins.
                             Ao longo do curso 2 temas são desenvolvidos do zero, mostrando as principais características e recursos do Wordpress. Ao final do curso é demonstrado os conceitos básicos de plugins e como 
                            criar seus próprios plugins.</p>
                            
                            <p>Fontes: <a href="/downloads/cursowordpresstemasplugins.rar">CursoWordpressTemasPlugins.rar</a></p>
                            <ul>
                                <li <?php is_selected('part-1', true); ?> ><a href="?video=part-1">Parte 1 </a></li>
                                <li <?php is_selected('part-2', false); ?>><a href="?video=part-2">Parte 2 </a></li>
                                <li <?php is_selected('part-3', false); ?>><a href="?video=part-3">Parte 3 </a></li>
                                <li <?php is_selected('part-4', false); ?>><a href="?video=part-4">Parte 4 </a></li>
                                <li <?php is_selected('part-5', false); ?>><a href="?video=part-5">Parte 5 </a></li>
                                <li <?php is_selected('part-6', false); ?>><a href="?video=part-6">Parte 6 </a></li>
                                <li <?php is_selected('part-7', false); ?>><a href="?video=part-7">Parte 7 </a></li>
                                <li <?php is_selected('part-8', false); ?>><a href="?video=part-8">Parte 8 </a></li>
                                <li <?php is_selected('part-9', false); ?>><a href="?video=part-9">Parte 9 </a></li>
                            </ul>
                            <div class="video">
                                <img src="/img/arrow1.png"></img>
                                <?php 
                                    if ( isset($_GET['video']) && ! is_null($_GET['video'])) {
                                        
                                        switch($_GET['video']) {
                                            case 'part-1': 
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/3AHwLw6l-SI" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-2':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/17SFt8daAO0" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-3':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/3h_nMidgtQw" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-4':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/NOJ6KP2tWDM" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-5':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/NO4qBue8Osw" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-6':
                                                echo '<p>Neste dia houveram problemas de conexão e o curso foi interrompido, no próximo vídeo foi dado continuidade.</p> <br />';
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/dlMJHg6OX-Q" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-7':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/JRk71jTa8Us" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-8':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/_eYucHd9LkA" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                            case 'part-9':
                                                echo '<iframe width="700" height="400" src="//www.youtube.com/embed/13qghiOjzg0" frameborder="0" allowfullscreen></iframe>';
                                                break;
                                        }
                                    } else
                                        echo '<iframe width="700" height="400" src="//www.youtube.com/embed/3AHwLw6l-SI" frameborder="0" allowfullscreen></iframe>';
                                ?>
                                <br />
                                <div class="fb-like" data-href="http://nicholasandre.com.br/wordpress/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                                <h3>Deixe aqui a sua opinião do curso:</h3>
                                <div class="fb-comments" data-href="http://nicholasandre.com.br/wordpress/" data-width="700" data-numposts="40" data-colorscheme="light"></div>    
                            </div>
                            
                        </div> <!-- video-wrapper -->
                    </div>
            	</div> <!-- seciton-1 --> 
			</div>
    	</div>
	</div>
<?php include("footer.php");  ?>