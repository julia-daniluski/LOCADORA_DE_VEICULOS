<?php
//backend
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>ADM - Locadora de veículos</title>
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuario -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between alien-items-center inicio">
                    <h1>Lista de Locadora de veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo,(usuario) -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Administrador</strong>
                        </span>
                        <!-- botão de logout -->
                        <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1"><i class="bi bi-box-arrow-in-right"></i>Sair</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="" class="input-label">Tipo de veículo:</label>
                                <select class="form-select" name="" id="" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="helicoptero">Helicoptero</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade de dias</label>
                                <input type="number" name="quantidade" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" name="calcular">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

        <!-- Tabela de veiculos cadastrados-->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Veículos cadastrados
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelos</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Carro</td>
                                        <td>Uno</td>
                                        <td>ABC1D23</td>
                                        <td> <span class="badge bg-warning">Alugado</span></td>
                                                </form>
                                            </div>
</td>
                                    </tr>

                                    <tr>
                                        <td>Moto</td>
                                        <td>Biz 125</td>
                                        <td>GAY 8B12</td>
                                        <td> <span class="badge bg-success">Disponivel</span></td>

                                                </form>
                                            </div>
</td>
                                    </tr>

                                    <tr>
                                        <td>Helicoptero</td>
                                        <td> Robinson R44</td>
                                        <td>PT-ZEN</td>
                                        <td> <span class="badge bg-warning">Alugado</span></td>
                                        <td>
                                        
                                                </form>
                                            </div>
</td>
                                    </tr>

                                    <tr>
                                        <td>Carro</td>
                                        <td> Fiesta</td>
                                        <td>TWC1H98</td>
                                        <td> <span class="badge bg-success">Disponivel</span></td>
                                                </form>
                                            </div>
</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>