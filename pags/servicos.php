<!DOCTYPE html>
<html lang="pt-br">

    <!-- Metas -->
    <?php
        include('../padrao/head.php');
    ?>
        <title>Serviços</title>
    </head>
    <body>
        <!-- Cabeçalho -->
        <?php
            include('../padrao/header.php');
        ?>
        <!--   contexto   -->
        <h1 class="precos">Preços</h1>

        <div align="center">      
            <table class="tabela">
                <tr>
                    <th style="border-bottom: none;"></th>
                    <th style="border-bottom: none;"></th>
                    <th style="border-bottom: none;"><img src="../imagens/precos/p.jpg"></th>
                    <th style="border-bottom: none;"><img src="../imagens/precos/m.jpg"></th>
                    <th style="border-bottom: none;"><img src="../imagens/precos/g.jpg"></th>
                    <th style="border-bottom: none;"><img src="../imagens/precos/gg.jpg"></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>P</th>
                    <th>M</th>
                    <th>G</th>
                    <th>GG</th>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="1"></th>
                    <th>Escova</th>
                    <td>R$25,00</td>
                    <td>R$30,00</td>
                    <td>R$35,00</td>
                    <td style="border-right: none;">R$40,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="2"></th>
                    <th>Prancha</th>
                    <td>R$10,00</td>
                    <td>R$15,00</td>
                    <td>R$20,00</td>
                    <td style="border-right: none;">R$25,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="3"></th>
                    <th>Hidratação</th>
                    <td>R$30,00</td>
                    <td>R$40,00</td>
                    <td>R$50,00</td>
                    <td style="border-right: none;">R$60,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="4"></th>
                    <th>Reconstrução</th>
                    <td>R$60,00</td>
                    <td>R$80,00</td>
                    <td>R$100,00</td>
                    <td style="border-right: none;">R$120,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="5"></th>
                    <th>Balayagem 1c</th>
                    <td>R$180,00</td>
                    <td>R$200,00</td>
                    <td>R$220,00</td>
                    <td style="border-right: none;">R$250,00</td>
                </tr>
                <tr>
                <th><input type="checkbox" id="produto" value="6"></th>
                    <th>Balayagem 2cs</th>
                    <td>R$160,00</td>
                    <td>R$210,00</td>
                    <td>R$220,00</td>
                    <td style="border-right: none;">R$250,00</td>
                </tr>
               <tr>
                    <th><input type="checkbox" id="produto" value="7"></th>
                    <th>Ombre Hair</th>
                    <td>R$200,00</td>
                    <td>R$250,00</td>
                    <td>R$300,00</td>
                    <td style="border-right: none;">R$350,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="8"></th>
                    <th>Californianas</th>
                    <td>R$150,00</td>
                    <td>R$160,00</td>
                    <td>R$180,00</td>
                    <td style="border-right: none;">R$200,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="9"></th>
                    <th>Coloração</th>
                    <td>R$60,00</td>
                    <td>R$80,00</td>
                    <td>R$100,00</td>
                    <td style="border-right: none;">R$120,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="10"></th>
                    <th>Progressiva</th>
                    <td>R$150,00</td>
                    <td>R$160,00</td>
                    <td>R$180,00</td>
                    <td style="border-right: none;">R$200,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="11"></th>
                    <th>Esc. Inglesa</th>
                    <td>R$180,00</td>
                    <td>R$200,00</td>
                    <td>R$220,00</td>
                    <td style="border-right: none;">R$240,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="12"></th>
                    <th>Esc. Orgânica</th>
                    <td>R$180,00</td>
                    <td>R$200,00</td>
                    <td>R$220,00</td>
                    <td style="border-right: none;">R$240,00</td>
                </tr>
                <tr>
                    <th><input type="checkbox" id="produto" value="13"></th>
                    <th>Selente</th>
                    <td>R$149,00</td>
                    <td>R$169,00</td>
                    <td>R$189,00</td>
                    <td style="border-right: none;">R$210,00</td>
                </tr>
                <tr>
                    <th style="border-bottom: none;"><input type="checkbox" id="produto" value="14"></th>
                    <th style="border-bottom: none;">Matização</th>
                    <td style="border-bottom: none;">R$60,00</td>
                    <td style="border-bottom: none;">R$89,00</td>
                    <td style="border-bottom: none;">R$110,00</td>
                    <td style="border-right: none; border-bottom: none;">R$120,00</td>
                </tr>
            </table>
        </div>

        <h1 class="precos">Agende</h1>
        <form style="width: 60%; margin-left: 20%; font-size: 1.5em;">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
                <div class="form-group col-md-4">
                    <label>Tamanho</label>
                    <select id="tamanho" class="form-control">
                        <option selected value="1">P</option>
                        <option value="2">M</option>
                        <option value="3">G</option>
                        <option value="4">GG</option>
                    </select>
                </div>
            </div>
            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Serviço</label>
                    <select id="servico" class="form-control">
                        <option selected value="1">Escova</option>
                        <option value="2">Prancha</option>
                        <option value="3">Hidratação</option>
                        <option value="4">Reconstrução</option>
                        <option value="5">Balayagem 1C</option>
                        <option value="6">Balayagem 2Cs</option>
                        <option value="7">Ombre Hair</option>
                        <option value="8">Californianas</option>
                        <option value="9">Coloração</option>
                        <option value="10">Progressiva</option>
                        <option value="11">Escova Inglesa</option>
                        <option value="12">Escova Orgânica</option>
                        <option value="13">Selente</option>
                        <option value="14">Matização</option>
                    </select>
                </div>
            </div> -->
            <button type="submit" onclick="calcula()" class="btn btn-primary" style="font-size: 0.8em;">Agendar</button>
            </form>

        <!-- Rodape -->
        <?php
            include('../padrao/footer.php');
        ?>

        <script type="text/javascript" src="../script.js"></script>
    </body>
</html>