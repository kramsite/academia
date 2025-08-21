<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores - Academia FitLife</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #0d0d0d; /* preto mais profundo */
            color: #fff;
            line-height: 1.6;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: linear-gradient(90deg, #2e0a6f, #1a0033); /* roxo frio */
            box-shadow: 0 0 15px #2e0a6f;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 2rem;
            letter-spacing: 2px;
            color: #9b8cff; /* roxo frio claro */
            text-shadow: 0 0 10px #9b8cff;
            font-weight: 800;
        }
        
        .logo span {
            color: #4b4fff;
            font-weight: 900;
            text-shadow: 0 0 15px #4b4fff;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #ccc;
            font-weight: bold;
            transition: 0.3s;
            position: relative;
            padding: 0.6rem 1rem;
            border-radius: 6px;
            font-size: 1.05rem;
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #9b8cff;
            bottom: -4px;
            left: 0;
            transition: width 0.3s;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        nav ul li a:hover {
            color: #9b8cff;
            transform: translateY(-2px);
        }
        
        /* Banner */
        .banner {
            background: linear-gradient(rgba(13, 0, 26, 0.85), rgba(13, 0, 26, 0.9)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 1.5rem;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
            position: relative;
            overflow: hidden;
        }
        
        .banner::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            box-shadow: 0 0 60px #4b4fff, 0 0 120px #4b4fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            animation: pulse 3s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.7; }
            50% { transform: translate(-50%, -50%) scale(1.2); opacity: 1; }
        }
        
        .banner h2 {
            font-size: 2.8rem;
            margin-bottom: 1.2rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            letter-spacing: 0.5px;
            color: #9b8cff;
            text-shadow: 0 0 15px #9b8cff, 0 0 30px #4b4fff;
            position: relative;
            z-index: 2;
        }
        
        .banner p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
            color: #aaa;
            position: relative;
            z-index: 2;
        }
        
        /* Professores */
        .professores {
            padding: 4rem 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #9b8cff;
            position: relative;
            padding-bottom: 1rem;
            font-weight: 800;
            text-shadow: 0 0 10px #9b8cff;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 5px;
            background: linear-gradient(90deg, #4b4fff, #9b8cff);
            border-radius: 3px;
            box-shadow: 0 0 10px #4b4fff;
        }
        
        .filtros {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .filtro-btn {
            background: linear-gradient(90deg, #4b4fff, #2e0a6f);
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 30px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Orbitron', sans-serif;
            box-shadow: 0 5px 15px rgba(75, 79, 255, 0.35);
        }
        
        .filtro-btn:hover, .filtro-btn.ativo {
            background: linear-gradient(90deg, #2e0a6f, #4b4fff);
            box-shadow: 0 8px 20px rgba(75, 79, 255, 0.6), 0 0 20px #4b4fff;
            transform: translateY(-3px);
        }
        
        .grid-professores {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2.5rem;
        }
        
        .card-professor {
            background: #1a0026;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(43, 10, 111, 0.3);
            transition: all 0.4s ease;
            border: 1px solid #4b4fff;
            text-align: center;
        }
        
        .card-professor:hover {
            transform: translateY(-12px);
            box-shadow: 0 18px 35px rgba(75, 79, 255, 0.4), 0 0 30px #4b4fff;
        }
        
        .card-imagem {
            height: 280px;
            overflow: hidden;
            position: relative;
        }
        
        .card-imagem img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        
        .card-professor:hover .card-imagem img {
            transform: scale(1.15);
        }
        
        .card-conteudo {
            padding: 2rem;
        }
        
        .card-conteudo h3 {
            font-size: 1.7rem;
            margin-bottom: 0.5rem;
            color: #9b8cff;
            font-weight: 700;
            text-shadow: 0 0 8px #9b8cff;
        }
        
        .especialidade {
            color: #4b4fff;
            font-weight: 600;
            margin-bottom: 1rem;
            display: block;
            font-size: 1.1rem;
        }
        
        .experiencia {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1.5rem;
            background: rgba(27, 0, 51, 0.5);
            padding: 0.8rem;
            border-radius: 10px;
            border-left: 4px solid #4b4fff;
        }
        
        .experiencia i {
            color: #4b4fff;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .card-conteudo p {
            margin-bottom: 1.5rem;
            color: #ccc;
            line-height: 1.7;
            font-size: 1.05rem;
        }
        
        .redes-sociais {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .rede-social {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(90deg, #4b4fff, #2e0a6f);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .rede-social:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(75, 79, 255, 0.6);
        }
        
        /* CTA */
        .cta {
            background: linear-gradient(135deg, #2e0a6f, #1a0033);
            color: white;
            text-align: center;
            padding: 5rem 0;
            margin-top: 4rem;
            border-radius: 20px 20px 0 0;
            border-top: 1px solid #4b4fff;
            box-shadow: 0 0 20px #2e0a6f;
        }
        
        .cta h2 {
            font-size: 2.3rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            color: #9b8cff;
            text-shadow: 0 0 15px #9b8cff;
        }
        
        .cta p {
            max-width: 650px;
            margin: 0 auto 2.5rem;
            font-size: 1.25rem;
            line-height: 1.8;
            color: #ccc;
        }
        
        .btn-grande {
            padding: 1.2rem 2.5rem;
            font-size: 1.2rem;
            background: linear-gradient(90deg, #1a0033, #2e0a6f);
            box-shadow: 0 0 20px #2e0a6f;
            color: white;
            text-decoration: none;
            border-radius: 35px;
            font-weight: 700;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .btn-grande:hover {
            background: linear-gradient(90deg, #2e0a6f, #1a0033);
            transform: translateY(-3px);
            box-shadow: 0 0 30px #4b4fff, 0 0 60px #4b4fff;
        }
        
        /* Footer */
        footer {
            background-color: #0d001a;
            color: #666;
            text-align: center;
            padding: 2.5rem 0;
            border-top: 1px solid #2e0a6f;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
                padding: 15px;
            }
            
            nav ul {
                margin-top: 1rem;
                justify-content: center;
                flex-wrap: wrap;
                gap: 0.5rem;
            }
            
            nav ul li {
                margin: 0;
            }
            
            .banner h2 {
                font-size: 2.2rem;
            }
            
            .banner p {
                font-size: 1.1rem;
            }
            
            .grid-professores {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .filtros {
                flex-direction: column;
                align-items: center;
            }
            
            .filtro-btn {
                width: 80%;
            }
        }
        
        @media (max-width: 576px) {
            .banner {
                padding: 4rem 1rem;
            }
            
            .banner::before {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Academia <span>FitLife</span></div>
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-dumbbell"></i> Modalidades</a></li>
                <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Professores</a></li>
                <li><a href="#"><i class="fas fa-tag"></i> Planos</a></li>
                <li><a href="#"><i class="fas fa-phone"></i> Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner">
        <div class="container">
            <h2>Nossa Equipe de Professores</h2>
            <p>Conheça os profissionais altamente qualificados que vão te ajudar a alcançar seus objetivos de forma segura e eficiente</p>
        </div>
    </section>

    <section class="professores">
        <div class="container">
            <h2 class="section-title">Nossos Professores</h2>
            
            <div class="filtros">
                <button class="filtro-btn ativo" data-filtro="todos">Todos</button>
                <button class="filtro-btn" data-filtro="musculacao">Musculação</button>
                <button class="filtro-btn" data-filtro="yoga">Yoga</button>
                <button class="filtro-btn" data-filtro="pilates">Pilates</button>
                <button class="filtro-btn" data-filtro="funcional">Funcional</button>
                <button class="filtro-btn" data-filtro="danca">Dança</button>
            </div>
            
            <div class="grid-professores">
                <!-- Professor 1 -->
                <div class="card-professor" data-categoria="musculacao">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professor Marcos">
                    </div>
                    <div class="card-conteudo">
                        <h3>Marcos Oliveira</h3>
                        <span class="especialidade">Musculação e Strength Training</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>5 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento de força e condicionamento físico. Formado em Educação Física com pós-graduação em Fisiologia do Exercício.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 2 -->
                <div class="card-professor" data-categoria="yoga">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professora Ana">
                    </div>
                    <div class="card-conteudo">
                        <h3>Ana Silva</h3>
                        <span class="especialidade">Yoga e Meditação</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>7 anos na FitLife</span>
                        </div>
                        <p>Instrutora de Yoga com 10 anos de experiência, especializada em Hatha e Vinyasa Yoga. Certificada internacionalmente em Yoga Terapêutico.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Professor 2 -->
                <div class="card-professor" data-categoria="yoga">
                    <div class="card-imagem">
                        <img src="professora.png" alt="Professora Ana">
                    </div>
                    <div class="card-conteudo">
                        <h3>rafaella Gomes</h3>
                        <span class="especialidade">Yoga e Meditação</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>7 anos na FitLife</span>
                        </div>
                        <p>Instrutora de Yoga com 10 anos de experiência, especializada em Hatha e Vinyasa Yoga. Certificada internacionalmente em Yoga Terapêutico.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 3 -->
                <div class="card-professor" data-categoria="pilates">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1573496799652-408c2ac9fe98?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professora Juliana">
                    </div>
                    <div class="card-conteudo">
                        <h3>Juliana Martins</h3>
                        <span class="especialidade">Pilates e Alongamento</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 anos na FitLife</span>
                        </div>
                        <p>Instrutora de Pilates com 8 anos de experiência, especializada em Pilates Solo e com Aparelhos. Formada em Fisioterapia com especialização em Pilates.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 4 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professor Ricardo">
                    </div>
                    <div class="card-conteudo">
                        <h3>Ricardo Almeida</h3>
                        <span class="especialidade">Treino Funcional e CrossFit</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>3 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento funcional e preparação física. Certificado em CrossFit Level 2 e treinamento de alta intensidade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Professor 4 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="professor2.png" alt="Professor Ricardo">
                    </div>
                    <div class="card-conteudo">
                        <h3>Ricardo Almeida</h3>
                        <span class="especialidade">Treino Funcional e CrossFit</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>3 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento funcional e preparação física. Certificado em CrossFit Level 2 e treinamento de alta intensidade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Professor 4 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="professor3.png" alt="Professor Ricardo">
                    </div>
                    <div class="card-conteudo">
                        <h3>Ricardo Almeida</h3>
                        <span class="especialidade">Treino Funcional e CrossFit</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>3 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento funcional e preparação física. Certificado em CrossFit Level 2 e treinamento de alta intensidade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Professor 4 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="professor2.png" alt="Professor Ricardo">
                    </div>
                    <div class="card-conteudo">
                        <h3>Ricardo Almeida</h3>
                        <span class="especialidade">Treino Funcional e CrossFit</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>3 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento funcional e preparação física. Certificado em CrossFit Level 2 e treinamento de alta intensidade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 
                
                <!-- Professor 
                
                <!-- Professor 5 -->
                <div class="card-professor" data-categoria="pilates">
                    <div class="card-imagem">
                        <img src="professor3.jpg" alt="Professora Patricia">
                    </div>
                    <div class="card-conteudo">
                        <h3>Patrícia Santos</h3>
                        <span class="especialidade">Musculação Feminina</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>6 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento feminino e reabilitação de lesões. Formada em Educação Física com mestrado em Biomecânica.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Professor 5 -->
                <div class="card-professor" data-categoria="pilates">
                    <div class="card-imagem">
                        <img src="professor5.jpg" alt="Professora Patricia">
                    </div>
                    <div class="card-conteudo">
                        <h3>Patrícia Santos</h3>
                        <span class="especialidade">Musculação Feminina</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>6 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento feminino e reabilitação de lesões. Formada em Educação Física com mestrado em Biomecânica.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 6 -->
                <div class="card-professor" data-categoria="danca">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professor Carlos">
                    </div>
                    <div class="card-conteudo">
                        <h3>Carlos Mendes</h3>
                        <span class="especialidade">Dança e Zumba</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 anos na FitLife</span>
                        </div>
                        <p>Especialista em dança fitness e Zumba. Coreógrafo com experiência em diversos estilos de dança e atividades aeróbicas em grupo.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 7 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professora Fernanda">
                    </div>
                    <div class="card-conteudo">
                        <h3>Fernanda Lima</h3>
                        <span class="especialidade">Funcional e HIIT</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>2 anos na FitLife</span>
                        </div>
                        <p>Especialista em treinamento funcional e HIIT. Certificada em nutrição esportiva e preparação física para atletas amadores.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 8 -->
                <div class="card-professor" data-categoria="yoga">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professora Sofia">
                    </div>
                    <div class="card-conteudo">
                        <h3>Sofia Rodrigues</h3>
                        <span class="especialidade">Yoga e Pilates</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>5 anos na FitLife</span>
                        </div>
                        <p>Instrutora de Yoga e Pilates com formação internacional. Especializada em yoga para gestantes e terceira idade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Quer treinar com nossos professores?</h2>
            <p>Agende uma aula experimental gratuita e conheça de perto a metodologia e qualidade dos profissionais FitLife</p>
            <a href="#" class="btn-grande"><i class="fas fa-calendar-check"></i> Agendar Aula Experimental</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 FitLife. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        // Filtro de professores
        document.addEventListener('DOMContentLoaded', function() {
            const filtroBtns = document.querySelectorAll('.filtro-btn');
            const professores = document.querySelectorAll('.card-professor');
            
            filtroBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove a classe ativo de todos os botões
                    filtroBtns.forEach(b => b.classList.remove('ativo'));
                    
                    // Adiciona a classe ativo ao botão clicado
                    this.classList.add('ativo');
                    
                    // Obtém o filtro selecionado
                    const filtro = this.getAttribute('data-filtro');
                    
                    // Filtra os professores
                    professores.forEach(professor => {
                        if (filtro === 'todos') {
                            professor.style.display = 'block';
                        } else {
                            if (professor.getAttribute('data-categoria') === filtro) {
                                professor.style.display = 'block';
                            } else {
                                professor.style.display = 'none';
                            }
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>