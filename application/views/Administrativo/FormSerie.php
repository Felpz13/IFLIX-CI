<div class="container mt-5 mb-5">
    <form class="text-center border border-light p-5 FundoBranco" method="POST">
            
            <p class="h4 mb-4"><?=$titulo?></p>                           
            
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Insira o Nome" value="<?php echo ''.($serie != null) ? $serie[0]->Nome : null?>"> 
            
            <label for="temporadas">Temporadas</label>
            <input type="number" min="1" max="99" id="temporadas" name="temporadas" placeholder="Insira o n° de Temporadas" class="form-control mb-4" value="<?php echo ''.($serie != null) ? $serie[0]->Temporadas : null?>">

            <label for="valor">Valor</label>
            <input type="number" step=".01" min="1" id="valor" name="valor" placeholder="Insira Valor (R$)" class="form-control mb-4" value="<?php echo ''.($serie != null) ? $serie[0]->Valor : null?>">

            <label for="imagem">Imagem</label>
            <input type="number" id="imagem" name="imagem" min="1" max="999"  placeholder="Insira o n° da Imagem na pasta assets/img" class="form-control mb-4" value="<?php echo ''.($serie != null) ? $serie[0]->Imagem : null?>">
                  
            <label for="genero">Genero</label>
            <select class="browser-default custom-select mb-4" id="genero" name="genero">
                    <option value="" disabled selected>Genero</option>
                    <option value="Drama" <?php echo ($serie != null && $serie[0]->Genero == "Drama") ? "selected" : null?>>Drama</option>
                    <option value="Suspense" <?php echo ($serie != null && $serie[0]->Genero == "Suspense") ? "selected" : null?>>Suspense</option>
                    <option value="Crime" <?php echo ($serie != null && $serie[0]->Genero == "Crime") ? "selected" : null?>>Crime</option>
                    <option value="Terror" <?php echo ($serie != null && $serie[0]->Genero == "Terror") ? "selected" : null?>>Terror</option>
                    <option value="Fantasia" <?php echo ($serie != null && $serie[0]->Genero == "Fantasia") ? "selected" : null?>>Fantasia</option>
                    <option value="Acao" <?php echo ($serie != null && $serie[0]->Genero == "Acao") ? "selected" : null?>>Ação</option>
                    <option value="Aventura" <?php echo ($serie != null && $serie[0]->Genero == "Aventura") ? "selected" : null?>>Aventura</option>
                    <option value="Comedia" <?php echo ($serie != null && $serie[0]->Genero == "Comedia") ? "selected" : null?>>Comédia</option>
                    <option value="Romance" <?php echo ($serie != null && $serie[0]->Genero == "Romance") ? "selected" : null?>>Romance</option>                   
            </select>
           
            <div class="form-group">
                <label class="texte-left" for="descricao">Descrição</label>
                <textarea class="form-control rounded-0" id="descricao" name="descricao" rows="3" placeholder="Insira o Resumo da Série!"><?php echo ''.($serie != null) ? $serie[0]->Descricao : null?></textarea>
            </div>            
           
            <button class="btn success-color-dark btn-block " type="submit"><?=$button?></button>

    </form>

</div>

