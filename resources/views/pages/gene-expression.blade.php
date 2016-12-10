@extends('layouts.master')

@section('content')
  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2>Gene Expression</h2>

                <br><br><br>

                <div class="form-group">
                  <form action="" class="form-horizontal" method="get" id="gene-expression">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                      <label style="text-transform: uppercase;">Search from Database</label>
                        <a data-toggle="tooltip" data-placement="right" title="e.g U49845" style="float:right;">
                        <span class="glyphicon glyphicon-question-sign"></span></a>
                          <div class="input-group col-md-12">
                            <input id="search" name="search" type="text" class="form-control typeahead" placeholder="ACCESSION NUMBER" data-provide="typeahead" autocomplete="off" >                            
                              
                            <span class="input-group-btn">
                              <input type="submit" value="SEARCH" id="btnSearch" class="btn btn-info">
                            </span>
                          </div>
                  </form>
                </div>

                @if (Session::has('message'))
                <div class=="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <br>OR<br><br><br>

                @foreach($gene as $value)
                @endforeach 

                <div class="form-group">
                    <label style="text-transform: uppercase;">Enter Gene Sequence</label>
                    <a data-placement="right" title="e.g AGGAAAAGCAGAATTACTAATTACCCTAGG" style="float:right;"><span class="glyphicon glyphicon-question-sign"></span></a>
                    <input type="text" value="@if(isset($_GET['search'])){{$value->fastaseq}}@endif" class="form-control" id="gene" required placeholder="GENE SEQUENCE"/>
                    <!-- <input type="text" value="@if(isset($_GET['search'])){{$value->fastaseq}}@endif" style="text-transform:uppercase" class="form-control" id="gene" required placeholder="e.g AGGAAAAGCAGAATTACTAATTACCCTAGG"/> -->
                </div>

                <br><br>

                <button class="btn btn-success btn-lg" onclick="myFunction()" style="float:center;">EXPRESS GENE</button>

                <!-- <p>Sorry</p> -->
              </div>
            </div>
          </div>
          <!-- <div class="error-message">
            <h4>Woops! Something gone wrong</h4>
            <p>Sorry, the page you have requested has either been moved,or does not exist, Return to our <a href="index.html">homepage</a>.</p>
          </div> -->

          <!-- Javascript -->
          <script type="text/javascript">
          function myFunction()
          {
            var DNA = document.getElementById('gene').value;
            var DNA_array = new Array(); 
            var cod;
            var text = "";
            var amino = "";
            var i=3;

            // split gene sequences every three characters
            do {
                DNA_array.push(DNA.substring(0, i));
            } while((DNA = DNA.substring(i, DNA.length)) != "");

            // display gene codons
            for (i = 0; i < DNA_array.length ; i++) {
                text += DNA_array[i] + " ";
            }
            document.getElementById("demo").innerHTML = text ;

            // display amino acid representative

            var current = document.getElementById("amino-result");
            current.innerHTML = '';

            for (i = 0; i < DNA_array.length ; i++) {
              amino = codon(DNA_array[i]);
              var a = document.createElement('a');
              var linkText = document.createTextNode(amino);
              a.appendChild(linkText);
              a.title = "Amino Acid " + amino;
              a.href = "amino-view/"+ amino + "";
              a.target = '_blank';

              current.appendChild(a);
            } 
          }

          function codon(cod)
          {
            if (cod=="TCT" || cod=="TCC" || cod=="TCA" || cod=="TCG" || cod=="AGT" || cod=="AGC") return "S";
            if (cod=="CTT" || cod=="CTC" || cod=="CTA" || cod=="CTG" || cod=="TTA" || cod=="TTG") return "L";
            if (cod=="CGT" || cod=="CGC" || cod=="CGA" || cod=="CGG" || cod=="AGA" || cod=="AGG") return "R";
            if (cod=="GTT" || cod=="GTC" || cod=="GTA" || cod=="GTG") return "V";
            if (cod=="GCT" || cod=="GCC" || cod=="GCA" || cod=="GCG") return "A";
            if (cod=="GGT" || cod=="GGC" || cod=="GGA" || cod=="GGG") return "G";
            if (cod=="CCT" || cod=="CCA" || cod=="CCC" || cod=="CCG") return "P";
            if (cod=="ACT" || cod=="ACC" || cod=="ACA" || cod=="ACG") return "T";
            if (cod=="ATT" || cod=="ATC" || cod=="ATA") return "I";
            if (cod=="TGT" || cod=="TGC") return "C";
            if (cod=="TTT" || cod=="TTC") return "F";
            if (cod=="TAT" || cod=="TAC") return "Y";
            if (cod=="CAA" || cod=="CAG") return "Q";
            if (cod=="AAT" || cod=="AAC") return "N";
            if (cod=="CAT" || cod=="CAC") return "H";
            if (cod=="GAA" || cod=="GAG") return "E";
            if (cod=="GAT" || cod=="GAC") return "D";
            if (cod=="AAA" || cod=="AAG") return "K";
            if (cod=="ATG") return "M";
            if (cod=="TGG") return "W";
            
            if (cod=="TAA" || cod=="TAG" || cod=="TGA") return "STOP";

            else return "-";
          }
        </script>
        <!-- End of javascript -->


        <!-- Gene Expression result -->
          <div class="error-message">
            <div  style="margin-left:264px; width:600px;">
              <h4>Result</h4> 
              <h3 style="text-transform: uppercase;">Codon:</h3>
                <p id="demo"></p><br>
              <h3 style="text-transform: uppercase;">Amino Acid:</h3>            
                <p id="amino-result"></p><br>
              <button class="btn btn-default" href="#amino_table" id="openBtn" data-toggle="modal"  style="float:center; text-transform: uppercase;">Amino Acid Table</button>
                
              <!-- Open Modal -->
                <div class="modal fade" id="amino_table">
                <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 class="modal-title">Symbols of Amino Acids</h3>
                        </div>
                        <div class="modal-body">
                          <table class="table table-striped" id="tblGrid">
                            <thead id="tblHead">
                              <tr>
                                <th>Amino Acids</th>
                                <th>Symbols</th>
                                <th>Amino Acids</th>
                                <th class="text-right">Symbols</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr><td>Alanine</td>
                                <td class="text-right">A</td>
                                <td>Cystine</td>
                                <td class="text-right">C</td>
                              </tr>
                              <tr><td>Aspartic Acid</td>
                                <td class="text-right">D</td>
                                <td>Glutamic Acid</td>
                                <td class="text-right">E</td>
                              </tr>
                              <tr><td>Glycine</td>
                                <td class="text-right">G</td>
                                <td>Histidine</td>
                                <td class="text-right">H</td>
                              </tr>
                              <tr><td>Isoleucine</td>
                                <td class="text-right">I</td>
                                <td>Lysine</td>
                                <td class="text-right">K</td>
                              </tr>
                              <tr><td>Leucine</td>
                                <td class="text-right">L</td>
                                <td>Methionine</td>
                                <td class="text-right">M</td>
                              </tr>

                              <tr><td>Asparagine</td>
                                <td class="text-right">N</td>
                                <td>Proline</td>
                                <td class="text-right">P</td>
                              </tr>
                              <tr><td>Glutamine</td>
                                <td class="text-right">Q</td>
                                <td>Arginine</td>
                                <td class="text-right">R</td>
                              </tr>
                              <tr><td>Serine</td>
                                <td class="text-right">S</td>
                                <td>Threonine</td>
                                <td class="text-right">T</td>
                              </tr>
                              <tr><td>Valine</td>
                                <td class="text-right">V</td>
                                <td>Tryptophan</td>
                                <td class="text-right">W</td>
                              </tr>
                              </tr>
                              <tr><td>Tyrosine</td>
                                <td class="text-right">Y</td>
                                <td>Phenylalanine</td>
                                <td class="text-right">F</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default " data-dismiss="modal">CLOSE</button>
                        </div>
                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
              <!-- Close Modal -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

  @endsection

  @section('extraScript')
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "{{url('gene-expression')}}");
    }
</script>
  @endsection