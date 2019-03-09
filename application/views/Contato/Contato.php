<!-- Default form contact -->
<div class="container FundoBranco mb-5">
    <form class="text-center border border-light  p-5">

        <p class="h4 mb-4">Contato!</p>

        <!-- Name -->
        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nome">

        <!-- Email -->
        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

        <!-- Subject -->
        <label>Assunto</label>
        <select class="browser-default custom-select mb-4">
            <option value="" disabled>Escolha uma Opção</option>
            <option value="1" selected>Sugestões</option>
            <option value="2">Reportar Bug</option>
            <option value="3">Solicitação de Séries</option>
            <option value="4">Problemas de Pagamento</option>
        </select>

        <!-- Message -->
        <div class="form-group">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Menssagem"></textarea>
        </div>

        <!-- Copy -->
        <div class="custom-control custom-checkbox mb-4">
            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
            <label class="custom-control-label" for="defaultContactFormCopy">Me envie uma cópia.</label>
        </div>

        <!-- Send button -->
        <button class="btn success-color-dark btn-block" type="submit">Enviar</button>

    </form>
</div>
<!-- Default form contact -->