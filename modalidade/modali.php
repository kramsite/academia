<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia  - Modalidades</title>
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
        
        /* Modalidades */
        .modalidades {
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
        
        .grid-modalidades {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));
            gap: 2.5rem;
        }
        
        .card-modalidade {
            background: #1a0026;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(43, 10, 111, 0.3);
            transition: all 0.4s ease;
            border: 1px solid #4b4fff;
        }
        
        .card-modalidade:hover {
            transform: translateY(-12px);
            box-shadow: 0 18px 35px rgba(75, 79, 255, 0.4), 0 0 30px #4b4fff;
        }
        
        .card-imagem {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .card-imagem img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        
        .card-modalidade:hover .card-imagem img {
            transform: scale(1.15);
        }
        
        .card-conteudo {
            padding: 2rem;
        }
        
        .card-conteudo h3 {
            font-size: 1.7rem;
            margin-bottom: 1rem;
            color: #9b8cff;
            font-weight: 700;
            text-shadow: 0 0 8px #9b8cff;
        }
        
        .card-conteudo p {
            margin-bottom: 1.5rem;
            color: #ccc;
            line-height: 1.7;
            font-size: 1.05rem;
        }
        
        .horarios {
            margin-bottom: 2rem;
            background: rgba(27, 0, 51, 0.5);
            padding: 1.2rem;
            border-radius: 10px;
            border-left: 4px solid #4b4fff;
        }
        
        .horarios h4 {
            font-size: 1.15rem;
            margin-bottom: 0.8rem;
            color: #9b8cff;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .horarios h4 i {
            color: #4b4fff;
        }
        
        .horarios ul {
            list-style: none;
        }
        
        .horarios ul li {
            padding: 0.4rem 0;
            font-size: 1rem;
            border-bottom: 1px dashed #333;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ccc;
        }
        
        .horarios ul li:last-child {
            border-bottom: none;
        }
        
        .horarios ul li i {
            color: #4b4fff;
            font-size: 0.9rem;
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(90deg, #4b4fff, #2e0a6f);
            color: white;
            padding: 0.9rem 1.8rem;
            text-decoration: none;
            border-radius: 35px;
            font-weight: 700;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(75, 79, 255, 0.35);
            cursor: pointer;
            border: none;
            font-size: 1.05rem;
            letter-spacing: 0.5px;
            width: 100%;
            text-align: center;
            font-family: 'Orbitron', sans-serif;
        }
        
        .btn:hover {
            background: linear-gradient(90deg, #2e0a6f, #4b4fff);
            box-shadow: 0 8px 20px rgba(75, 79, 255, 0.6), 0 0 20px #4b4fff;
            transform: translateY(-3px);
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(13, 0, 26, 0.95);
            z-index: 1000;
            overflow-y: auto;
            padding: 25px;
        }
        
        .modal-conteudo {
            background-color: #1a0026;
            margin: 2.5rem auto;
            border-radius: 15px;
            max-width: 900px;
            box-shadow: 0 10px 35px rgba(75, 79, 255, 0.3);
            animation: modalFadeIn 0.5s;
            overflow: hidden;
            border: 1px solid #4b4fff;
        }
        
        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-60px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .modal-header {
            padding: 2rem;
            background: linear-gradient(90deg, #4b4fff, #2e0a6f);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .modal-header h2 {
            font-size: 2rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 12px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        .fechar {
            color: white;
            font-size: 2.2rem;
            cursor: pointer;
            transition: color 0.3s;
            font-weight: bold;
            padding: 0 10px;
        }
        
        .fechar:hover {
            color: #9b8cff;
            transform: scale(1.2);
        }
        
        .modal-body {
            padding: 2.5rem;
        }
        
        .modal-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            margin-bottom: 2.5rem;
        }
        
        .modal-info h3 {
            font-size: 1.4rem;
            margin-bottom: 1.2rem;
            color: #9b8cff;
            border-bottom: 3px solid #4b4fff;
            padding-bottom: 0.7rem;
            font-weight: 700;
            text-shadow: 0 0 8px #9b8cff;
        }
        
        .info-box {
            background-color: rgba(27, 0, 51, 0.5);
            padding: 1.5rem;
            border-radius: 12px;
            border-left: 5px solid #4b4fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .info-box ul {
            list-style: none;
            padding-left: 0;
        }
        
        .info-box ul li {
            padding: 0.5rem 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ccc;
        }
        
        .info-box ul li i {
            color: #4b4fff;
            font-size: 1.1rem;
        }
        
        .professor {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            background: rgba(27, 0, 51, 0.3);
            padding: 1.2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border: 1px solid #333;
        }
        
        .professor img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1.5rem;
            border: 3px solid #4b4fff;
            box-shadow: 0 0 10px #4b4fff;
        }
        
        .professor-info h4 {
            font-size: 1.3rem;
            margin-bottom: 0.3rem;
            color: #9b8cff;
        }
        
        .professor-info p {
            font-size: 1rem;
            color: #ccc;
        }
        
        /* Formulário */
        .form-group {
            margin-bottom: 1.8rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 600;
            color: #9b8cff;
            font-size: 1.1rem;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #333;
            border-radius: 8px;
            font-size: 1.05rem;
            transition: all 0.3s;
            background-color: rgba(27, 0, 51, 0.3);
            color: #fff;
            font-family: 'Orbitron', sans-serif;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4b4fff;
            box-shadow: 0 0 0 3px rgba(75, 79, 255, 0.2), 0 0 10px #4b4fff;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
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
        @media (max-width: 992px) {
            .modal-info {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
        
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
            
            .grid-modalidades {
                grid-template-columns: 1fr;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 576px) {
            .modal-body {
                padding: 1.5rem;
            }
            
            .modal-header {
                padding: 1.5rem;
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
            
            .professor {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
            
            .professor img {
                margin-right: 0;
            }
            
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
        <div class="logo">Academy <span>Vortex</span></div>
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-dumbbell"></i> Modalidades</a></li>
                <li><a href="#"><i class="fas fa-tag"></i> Planos</a></li>
                <li><a href="#"><i class="fas fa-phone"></i> Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner">
        <div class="container">
            <h2>Transforme seu corpo e sua mente</h2>
            <p>Descubra a modalidade perfeita para o seu estilo de vida e alcance seus objetivos com nossos profissionais especializados</p>
        </div>
    </section>

    <section class="modalidades">
        <div class="container">
            <h2 class="section-title">Nossas Modalidades</h2>
            <div class="grid-modalidades">
                <!-- Yoga -->
                <div class="card-modalidade">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Yoga">
                    </div>
                    <div class="card-conteudo">
                        <h3>Yoga</h3>
                        <p>Prática que combina posturas físicas, exercícios respiratórios e meditação para melhorar o bem-estar geral e a flexibilidade.</p>
                        <div class="horarios">
                            <h4><i class="far fa-clock"></i> Horários:</h4>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i> Segunda e Quarta - 8h às 9h</li>
                                <li><i class="far fa-calendar-alt"></i> Terça e Quinta - 18h às 19h</li>
                                <li><i class="far fa-calendar-alt"></i> Sábado - 9h às 10h</li>
                            </ul>
                        </div>
                        <button class="btn btn-modal" data-modal="modal-yoga">Saiba mais e inscreva-se</button>
                    </div>
                </div>
                
                <!-- Pilates -->
                <div class="card-modalidade">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Pilates">
                    </div>
                    <div class="card-conteudo">
                        <h3>Pilates</h3>
                        <p>Método de exercício físico que se foca no controle dos músculos do core, melhorando a postura, flexibilidade e força muscular.</p>
                        <div class="horarios">
                            <h4><i class="far fa-clock"></i> Horários:</h4>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i> Segunda e Quarta - 10h às 11h</li>
                                <li><i class="far fa-calendar-alt"></i> Terça e Quinta - 19h às 20h</li>
                                <li><i class="far fa-calendar-alt"></i> Sexta - 9h às 10h</li>
                            </ul>
                        </div>
                        <button class="btn btn-modal" data-modal="modal-pilates">Saiba mais e inscreva-se</button>
                    </div>
                </div>
                
                <!-- Musculação -->
                <div class="card-modalidade">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Musculação">
                    </div>
                    <div class="card-conteudo">
                        <h3>Musculação</h3>
                        <p>Atividade física voltada para o ganho de massa muscular e força, com equipamentos de última geração e acompanhamento profissional.</p>
                        <div class="horarios">
                            <h4><i class="far fa-clock"></i> Horários:</h4>
                            <ul>
                                <li><i class="far fa-calendar-alt"></i> Segunda a Sexta - 6h às 22h</li>
                                <li><i class="far fa-calendar-alt"></i> Sábado - 8h às 12h</li>
                                <li><i class="far fa-calendar-alt"></i> Domingo - 9h às 11h</li>
                            </ul>
                        </div>
                        <button class="btn btn-modal" data-modal="modal-musculacao">Saiba mais e inscreva-se</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Yoga -->
    <div id="modal-yoga" class="modal">
        <div class="modal-conteudo">
            <div class="modal-header">
                <h2><i class="fas fa-spa"></i> Yoga</h2>
                <span class="fechar">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-info">
                    <div class="info-box">
                        <h3>Descrição</h3>
                        <p>O Yoga é uma prática milenar que une corpo, mente e espírito através de posturas físicas (ásanas), exercícios respiratórios (pranayama) e meditação. Nossas aulas são adaptadas para todos os níveis, desde iniciantes até praticantes avançados, e focam no desenvolvimento da consciência corporal, flexibilidade e equilíbrio mental.</p>
                    </div>
                    <div class="info-box">
                        <h3>Benefícios</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Melhora da flexibilidade e força muscular</li>
                            <li><i class="fas fa-check-circle"></i> Redução do estresse e ansiedade</li>
                            <li><i class="fas fa-check-circle"></i> Melhora da postura e consciência corporal</li>
                            <li><i class="fas fa-check-circle"></i> Aumento da concentração e clareza mental</li>
                            <li><i class="fas fa-check-circle"></i> Melhora da qualidade do sono</li>
                            <li><i class="fas fa-check-circle"></i> Fortalecimento do sistema imunológico</li>
                        </ul>
                    </div>
                </div>
                
                <div class="modal-info">
                    <div class="info-box">
                        <h3><i class="far fa-clock"></i> Horários e Locais</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Segunda e Quarta</strong> - 8h às 9h (Sala 2 - Unidade Centro)</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Terça e Quinta</strong> - 18h às 19h (Sala 2 - Unidade Centro)</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Sábado</strong> - 9h às 10h (Sala 1 - Unidade Jardins)</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h3><i class="fas fa-chalkboard-teacher"></i> Professores</h3>
                        <div class="professor">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Professora">
                            <div class="professor-info">
                                <h4>Ana Silva</h4>
                                <p>Instrutora de Yoga com 10 anos de experiência, especializada em Hatha e Vinyasa Yoga.</p>
                            </div>
                        </div>
                        <div class="professor">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Professor">
                            <div class="professor-info">
                                <h4>Carlos Mendes</h4>
                                <p>Especialista em Yoga Terapêutico e Meditação, com formação internacional.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3><i class="fas fa-edit"></i> Inscreva-se na Aula Experimental</h3>
                <form id="form-yoga">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="horario">Horário preferido</label>
                            <select id="horario" name="horario" required>
                                <option value="">Selecione um horário</option>
                                <option value="segunda-quarta-8h">Segunda e Quarta - 8h às 9h</option>
                                <option value="terca-quinta-18h">Terça e Quinta - 18h às 19h</option>
                                <option value="sabado-9h">Sábado - 9h às 10h</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacao">Observações</label>
                        <textarea id="observacao" name="observacao" rows="3" placeholder="Informe se possui alguma condição de saúde específica ou experiência prévia com yoga"></textarea>
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Enviar Inscrição</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pilates -->
    <div id="modal-pilates" class="modal">
        <div class="modal-conteudo">
            <div class="modal-header">
                <h2><i class="fas fa-spa"></i> Pilates</h2>
                <span class="fechar">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-info">
                    <div class="info-box">
                        <h3>Descrição</h3>
                        <p>O Pilates é um método de exercício físico que se foca no controle dos músculos do core, melhorando a postura, flexibilidade e força muscular. Desenvolvido por Joseph Pilates, o método enfatiza o alinhamento postural, a respiração e a concentração.</p>
                    </div>
                    <div class="info-box">
                        <h3>Benefícios</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Melhora da postura e alinhamento corporal</li>
                            <li><i class="fas fa-check-circle"></i> Aumento da flexibilidade e força muscular</li>
                            <li><i class="fas fa-check-circle"></i> Desenvolvimento da consciência corporal</li>
                            <li><i class="fas fa-check-circle"></i> Prevenção e reabilitação de lesões</li>
                            <li><i class="fas fa-check-circle"></i> Redução do estresse e tensão muscular</li>
                            <li><i class="fas fa-check-circle"></i> Melhora da coordenação e equilíbrio</li>
                        </ul>
                    </div>
                </div>
                
                <div class="modal-info">
                    <div class="info-box">
                        <h3><i class="far fa-clock"></i> Horários e Locais</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Segunda e Quarta</strong> - 10h às 11h (Sala 3 - Unidade Centro)</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Terça e Quinta</strong> - 19h às 20h (Sala 3 - Unidade Centro)</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Sexta</strong> - 9h às 10h (Sala 2 - Unidade Jardins)</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h3><i class="fas fa-chalkboard-teacher"></i> Professores</h3>
                        <div class="professor">
                            <img src="https://images.unsplash.com/photo-1573496799652-408c2ac9fe98?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Professora">
                            <div class="professor-info">
                                <h4>Juliana Martins</h4>
                                <p>Instrutora de Pilates com 8 anos de experiência, especializada em Pilates Solo e com Aparelhos.</p>
                            </div>
                        </div>
                        <div class="professor">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Professor">
                            <div class="professor-info">
                                <h4>Ricardo Almeida</h4>
                                <p>Especialista em Pilates para reabilitação e preparação física, com formação internacional.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3><i class="fas fa-edit"></i> Inscreva-se na Aula Experimental</h3>
                <form id="form-pilates">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nome-pilates">Nome completo</label>
                            <input type="text" id="nome-pilates" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email-pilates">E-mail</label>
                            <input type="email" id="email-pilates" name="email" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="telefone-pilates">Telefone</label>
                            <input type="tel" id="telefone-pilates" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="horario-pilates">Horário preferido</label>
                            <select id="horario-pilates" name="horario" required>
                                <option value="">Selecione um horário</option>
                                <option value="segunda-quarta-10h">Segunda e Quarta - 10h às 11h</option>
                                <option value="terca-quinta-19h">Terça e Quinta - 19h às 20h</option>
                                <option value="sexta-9h">Sexta - 9h às 10h</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="experiencia-pilates">Nível de Experiência</label>
                        <select id="experiencia-pilates" name="experiencia" required>
                            <option value="">Selecione sua experiência</option>
                            <option value="iniciante">Iniciante</option>
                            <option value="intermediario">Intermediário</option>
                            <option value="avancado">Avançado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="observacao-pilates">Observações</label>
                        <textarea id="observacao-pilates" name="observacao" rows="3" placeholder="Informe se possui alguma condição de saúde específica ou lesão prévia"></textarea>
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Enviar Inscrição</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Musculação -->
    <div id="modal-musculacao" class="modal">
        <div class="modal-conteudo">
            <div class="modal-header">
                <h2><i class="fas fa-dumbbell"></i> Musculação</h2>
                <span class="fechar">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-info">
                    <div class="info-box">
                        <h3>Descrição</h3>
                        <p>A musculação é uma atividade física que consiste no levantamento de pesos com o objetivo de aumentar a força e a massa muscular. Nossa academia conta com equipamentos de última geração e profissionais qualificados para orientar seus treinos, seja seu objetivo hipertrofia, emagrecimento ou condicionamento físico.</p>
                    </div>
                    <div class="info-box">
                        <h3>Benefícios</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Aumento da força e resistência muscular</li>
                            <li><i class="fas fa-check-circle"></i> Aceleração do metabolismo e queima de gordura</li>
                            <li><i class="fas fa-check-circle"></i> Fortalecimento dos ossos e prevenção de osteoporose</li>
                            <li><i class="fas fa-check-circle"></i> Melhora da postura e redução de dores nas costas</li>
                            <li><i class="fas fa-check-circle"></i> Aumento da autoestima e confiança</li>
                            <li><i class="fas fa-check-circle"></i> Melhora da qualidade do sono e redução do estresse</li>
                        </ul>
                    </div>
                </div>
                
                <div class="modal-info">
                    <div class="info-box">
                        <h3><i class="far fa-clock"></i> Horários e Locais</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Segunda a Sexta</strong> - 6h às 22h (Área de Musculação - Unidade Centro)</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Sábado</strong> - 8h às 12h (Área de Musculação - Unidade Centro)</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Domingo</strong> - 9h às 11h (Área de Musculação - Unidade Jardins)</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h3><i class="fas fa-chalkboard-teacher"></i> Professores</h3>
                        <div class="professor">
                            <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Professor">
                            <div class="professor-info">
                                <h4>Marcos Oliveira</h4>
                                <p>Educador físico com especialização em treinamento de força e condicionamento.</p>
                            </div>
                        </div>
                        <div class="professor">
                            <img src="https://images.unsplash.com/photo-1594381898411-846e7d193883?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Professora">
                            <div class="professor-info">
                                <h4>Patrícia Santos</h4>
                                <p>Especialista em treinamento feminino e reabilitação de lesões.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3><i class="fas fa-edit"></i> Inscreva-se para uma Avaliação</h3>
                <form id="form-musculacao">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nome-musculacao">Nome completo</label>
                            <input type="text" id="nome-musculacao" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email-musculacao">E-mail</label>
                            <input type="email" id="email-musculacao" name="email" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="telefone-musculacao">Telefone</label>
                            <input type="tel" id="telefone-musculacao" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="objetivo">Objetivo Principal</label>
                            <select id="objetivo" name="objetivo" required>
                                <option value="">Selecione seu objetivo</option>
                                <option value="emagrecimento">Emagrecimento</option>
                                <option value="hipertrofia">Ganho de Massa Muscular</option>
                                <option value="condicionamento">Condicionamento Físico</option>
                                <option value="saude">Melhora da Saúde</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="experiencia">Nível de Experiência</label>
                        <select id="experiencia" name="experiencia" required>
                            <option value="">Selecione sua experiência</option>
                            <option value="iniciante">Iniciante</option>
                            <option value="intermediario">Intermediário</option>
                            <option value="avancado">Avançado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="observacao-musculacao">Observações</label>
                        <textarea id="observacao-musculacao" name="observacao" rows="3" placeholder="Informe se possui alguma lesão, limitação ou condição de saúde específica"></textarea>
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Enviar Inscrição</button>
                </form>
            </div>
        </div>
    </div>

    <section class="cta">
        <div class="container">
            <h2>Pronto para começar sua transformação?</h2>
            <p>Agende uma aula experimental gratuita e descubra qual modalidade combina mais com você. Nossos instrutores estão prontos para te ajudar a alcançar seus objetivos!</p>
            <a href="#" class="btn btn-grande"><i class="fas fa-calendar-check"></i> Agendar Aula Experimental</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Vortex. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        // JavaScript para controlar a exibição dos modais
        document.addEventListener('DOMContentLoaded', function() {
            // Botões para abrir modais
            var botoesModal = document.querySelectorAll('.btn-modal');
            var modais = document.querySelectorAll('.modal');
            var botoesFechar = document.querySelectorAll('.fechar');
            
            // Abrir modal
            botoesModal.forEach(function(botao) {
                botao.addEventListener('click', function() {
                    var modalId = this.getAttribute('data-modal');
                    document.getElementById(modalId).style.display = 'block';
                    document.body.style.overflow = 'hidden'; // Impede scroll na página principal
                });
            });
            
            // Fechar modal
            botoesFechar.forEach(function(botao) {
                botao.addEventListener('click', function() {
                    var modal = this.closest('.modal');
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto'; // Permite scroll novamente
                });
            });
            
            // Fechar modal clicando fora dele
            window.addEventListener('click', function(event) {
                modais.forEach(function(modal) {
                    if (event.target == modal) {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            });
            
            // Prevenir envio do formulário (apenas para demonstração)
            var formularios = document.querySelectorAll('form');
            formularios.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Inscrição enviada com sucesso! Entraremos em contato em breve.');
                    this.closest('.modal').style.display = 'none';
                    document.body.style.overflow = 'auto';
                });
            });
        });
    </script>
</body>
</html>