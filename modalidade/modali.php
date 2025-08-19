<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia FitLife - Modalidades</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset e estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
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
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            padding: 1.2rem 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 2rem;
            font-weight: 800;
            letter-spacing: 0.5px;
        }
        
        .logo span {
            color: #e74c3c;
            font-weight: 900;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 1.8rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            padding: 0.6rem 1rem;
            border-radius: 6px;
            font-size: 1.05rem;
        }
        
        nav ul li a:hover {
            color: #3498db;
            background-color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        /* Banner */
        .banner {
            background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 1.5rem;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
        }
        
        .banner h2 {
            font-size: 2.8rem;
            margin-bottom: 1.2rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            letter-spacing: 0.5px;
        }
        
        .banner p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }
        
        /* Modalidades */
        .modalidades {
            padding: 4rem 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
            position: relative;
            padding-bottom: 1rem;
            font-weight: 800;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 5px;
            background: linear-gradient(90deg, #3498db, #e74c3c);
            border-radius: 3px;
        }
        
        .grid-modalidades {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(330px, 1fr));
            gap: 2.5rem;
        }
        
        .card-modalidade {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
            transition: all 0.4s ease;
            border: 1px solid #eaeaea;
        }
        
        .card-modalidade:hover {
            transform: translateY(-12px);
            box-shadow: 0 18px 35px rgba(0,0,0,0.18);
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
            color: #2c3e50;
            font-weight: 700;
        }
        
        .card-conteudo p {
            margin-bottom: 1.5rem;
            color: #555;
            line-height: 1.7;
            font-size: 1.05rem;
        }
        
        .horarios {
            margin-bottom: 2rem;
            background: #f9f9f9;
            padding: 1.2rem;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }
        
        .horarios h4 {
            font-size: 1.15rem;
            margin-bottom: 0.8rem;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .horarios h4 i {
            color: #3498db;
        }
        
        .horarios ul {
            list-style: none;
        }
        
        .horarios ul li {
            padding: 0.4rem 0;
            font-size: 1rem;
            border-bottom: 1px dashed #eee;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .horarios ul li:last-child {
            border-bottom: none;
        }
        
        .horarios ul li i {
            color: #e74c3c;
            font-size: 0.9rem;
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(90deg, #3498db, #2980b9);
            color: white;
            padding: 0.9rem 1.8rem;
            text-decoration: none;
            border-radius: 35px;
            font-weight: 700;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.35);
            cursor: pointer;
            border: none;
            font-size: 1.05rem;
            letter-spacing: 0.5px;
            width: 100%;
            text-align: center;
        }
        
        .btn:hover {
            background: linear-gradient(90deg, #2980b9, #3498db);
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.5);
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
            background-color: rgba(0,0,0,0.85);
            z-index: 1000;
            overflow-y: auto;
            padding: 25px;
        }
        
        .modal-conteudo {
            background-color: white;
            margin: 2.5rem auto;
            border-radius: 15px;
            max-width: 900px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.3);
            animation: modalFadeIn 0.5s;
            overflow: hidden;
        }
        
        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-60px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .modal-header {
            padding: 2rem;
            background: linear-gradient(90deg, #3498db, #2980b9);
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
            color: #e74c3c;
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
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 0.7rem;
            font-weight: 700;
        }
        
        .info-box {
            background-color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 12px;
            border-left: 5px solid #3498db;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
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
        }
        
        .info-box ul li i {
            color: #27ae60;
            font-size: 1.1rem;
        }
        
        .professor {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            background: white;
            padding: 1.2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.06);
        }
        
        .professor img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1.5rem;
            border: 3px solid #3498db;
        }
        
        .professor-info h4 {
            font-size: 1.3rem;
            margin-bottom: 0.3rem;
            color: #2c3e50;
        }
        
        .professor-info p {
            font-size: 1rem;
            color: #666;
        }
        
        /* Formulário */
        .form-group {
            margin-bottom: 1.8rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 600;
            color: #2c3e50;
            font-size: 1.1rem;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1.05rem;
            transition: all 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        /* CTA */
        .cta {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            text-align: center;
            padding: 5rem 0;
            margin-top: 4rem;
            border-radius: 20px 20px 0 0;
        }
        
        .cta h2 {
            font-size: 2.3rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
        }
        
        .cta p {
            max-width: 650px;
            margin: 0 auto 2.5rem;
            font-size: 1.25rem;
            line-height: 1.8;
        }
        
        .btn-grande {
            padding: 1.2rem 2.5rem;
            font-size: 1.2rem;
            background: linear-gradient(90deg, #2c3e50, #34495e);
        }
        
        .btn-grande:hover {
            background: linear-gradient(90deg, #34495e, #2c3e50);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2.5rem 0;
        }
        
        /* Responsividade */
        @media (max-width: 992px) {
            .modal-info {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            header .container {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
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
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Academia <span>FitLife</span></div>
            <nav>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-dumbbell"></i> Modalidades</a></li>
                    <li><a href="#"><i class="fas fa-tag"></i> Planos</a></li>
                    <li><a href="#"><i class="fas fa-phone"></i> Contato</a></li>
                </ul>
            </nav>
        </div>
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