$(window.document).ready(function() {
    $("#liste_cours").on("click", "a", function()
     {
        $('.lien').removeClass('lien_conservé');
        $(this).addClass('lien_conservé');
        $('#sous_categorie').empty();
        $('.sec article').hide();

        var monId=$(this).attr('id');
        //console.log(monId);
        if(monId!='home' && monId!='hide_all')
        {
            $('#sous_categorie').prepend('<hr>');
            $('#sous_categorie').append('<a id="'+monId+'_cours" href="#" class="lien"><li>Cours</li></a>');
            $('#sous_categorie').append('<a id="'+monId+'_exo" href="#" class="lien"><li>Exercices</li></a>');
        }
    });

     $('.sec article').hide();

    $('#sous_categorie').on("click","a",function(){
        var monId=$(this).attr('id');
        var monArticle=monId.substr(4,monId.length);
        $('.lien').removeClass('lien_conservé');
        $(this).addClass('lien_conservé');
        console.log(monArticle);
        $('.sec article').hide();
        $('#' + monArticle).show();
    });

});