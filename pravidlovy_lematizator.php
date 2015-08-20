<?php include '_head.php'; ?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <img src="img/stu2pewe.png" class="img-responsive "  alt="FIIT Pewe logo">
                </a>
            </div>                   
          
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Services Section -->
    <section id="focus">
        <div class="container ">     
            <div class="row">   
                <div class="col-lg-20">
                    <h2 class="section-heading">Pravidlový lematizátor (Tvaroslovník)</h2>

                              <p class="item-intro text-muted">Stránka projektu: <a href="http://text.fiit.stuba.sk/lemmatizer" target="_blank">http://text.fiit.stuba.sk/lemmatizer</a></p>
                            <p >Lematizácia na základe pravidiel podľa článku z UPJŠ v Košiciach [1]. Pravidlá sú založené na pozorovaní, že ze na ohýbanie slovenského slova má najväčší vplyv jeho koniec (sufix). Ten sa použije na výber šablóny, podľa ktorej sa upraví vstupné slovo. Nevýhodou tejto služby sú nepresnosti spôsobené prípadným nesprávnym výberom vhodnej šablóny. Výhodou je možnosť lematizácie všetkých slov, aj takých, ktoré nie sú v nejakom slovníku (nové slová, cudzie slová, ...).</p>  
                            
                           
                            <ul class="list-inline">
                                <li>Dátum: Apríl 2013</li>
                                <li>Implementoval: R. Horváth</li>
                            </ul>
                            <br/>      
                            <br/>
                            
                            <h4 class="text-muted">Referencie:</h4>
                            <ol class="text-left">
                               <li>KRAJČÍ, S., NOVOTNÝ, R.: Hľadanie základného tvaru slovenského slova na základe spoločného konca slov. In: 1st Workshop on Intelligent and Knowledge oriented Technologies, Institute of Informatics SAS, 2007, s. 99-101.</li>                                                                                                                                                         
                             </ol>      
                            <a href="http://text.fiit.stuba.sk#sekcia-lematizacia" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Späť na stránku služieb</a>
            </div>
            </div>
                         
            
        </div>
    </section>
    
 

<?php include '_footer.php'; ?>
