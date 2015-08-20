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
                    <h2 class="section-heading">Rozpoznávač pomenovaných entít</h2>
                            <p class="item-intro text-muted">Stránka projektu: <a href="http://mus.fiit.stuba.sk/" target="_blank">http://mus.fiit.stuba.sk/</a></p>
                            <p>Rozpoznávanie pomenovaných entít (angl. Named Entity Recognition) predstavuje proces identifikácie vybraných typov slovných entít v textoch [1]. 
                            Medzi tieto typy patria osoby, lokality, organizácie, dátumy, čísla a zmiešané udalosti. 
                            Navrhnutý extraktor predstavuje prvé existujúce riešenie vytvorené pre slovenský jazyk [2, 3]. 
                            Jeho princíp je založený na lingvistickej metóde, využívajúcej korpus entít z portálu Wikipedia<sup>1</sup> <sup>2</sup>. 
                            Navrhnutý proces očakáva na vstupe slovenský text písaný v prirodzenom jazyku, prípadne URL na webovú stránku, z ktorej je pomocou služby Metallurgy<sup>3</sup> extrahovaný samotný text. Výstupom metódy je zoznam, vo formáte JSON, identifikovaných entít spolu s označením typu identifikovanej entity, pozície začiatku entity v texte a dĺžka entity. Alternatívou je výstup v podobe textu obohateného o označenie entít vo formáte definovanom [1].</p>

                           
                            <ul class="list-inline">
                                <li>Dátum: Apríl 2012</li>
                                <li>Implementoval: O. Kaššák</li>
                            </ul>
                          
                            <br/>                
                            <br/>
                            <h4 class="text-muted">Referencie:</h4>
                            <ol class="text-left">
                              <li>GRISHMAN, R., SUNDHEIM, B.: Message understanding conference-6: A brief history. In Proc. of COLING 96, 1996, pp. 466-471.</li>
                              <li>KAŠŠÁK, O, KOMPAN, M., BIELIKOVÁ, M.: Extrakcia pomenovaných entít pre slovenský jazyk. In: ZNALOSTI 2012 : Sborník příspěvků 11. ročníku konference. Praha: Matfyzpress, 2012, pp. 52-61. [V slovenčine]</li>
                              <li>KAŠŠÁK, O.: Extrakcia pomenovaných entít zo slovenského textu. Bakalárska práca. Vedúci práce: Michal Kompan. Bratislava: FIIT STU, 2012. 44 s. [V slovenčine]</li>                                                                                                                                                         
                            </ol>   
  <br/> 
  <sub>                         
  1) https://en.wikipedia.org/ <br/>
  2) https://sk.wikipedia.org/  <br/>
  3) http://metallurgyapi.eu/  
  </sub>
  <br/>
  
                           
                            <a href="http://text.fiit.stuba.sk#sekcia-extrakcia-vlastnych-pomenovani" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Späť na stránku služieb</a>
            </div>
            </div>
                         
            
        </div>
    </section>
    
 

<?php include '_footer.php'; ?>
