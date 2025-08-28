<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores - Academiy Vortex</title>
    <link rel="stylesheet" href="prof.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">Vortex</div>
        <nav>
            <ul>
                <li><a href="../inicio/inicio.php">Home <i class="fas fa-home"></i> </a></li>
                <li><a href="../IA/ia.php">IA <i class="fas fa-robot"></i> </a></li>
                <li><a href="../modalidade/modali.php">Modalidades <i class="fas fa-dumbbell"></i> </a></li>
                <li><a href="../plano/plano.php">Planos <i class="fas fa-tag"></i> </a></li>
                <li><a href="../quiz/quiz.php">Quiz <i class="fas fa-question"></i></a></li>
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
                        <img src="https://files.tecnoblog.net/wp-content/uploads/2021/07/wagner-perfil.jpg" alt="Professor Marcos">
                    </div>
                    <div class="card-conteudo">
                        <h3>Marcos Oliveira</h3>
                        <span class="especialidade">Musculação e Strength Training</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 meses na Vortex</span>
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
                            <span>1 anos na Vortex</span>
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
                <div class="card-professor" data-categoria="yoga">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professora Rafaella">
                    </div>
                    <div class="card-conteudo">
                        <h3>Soraya Moraes</h3>
                        <span class="especialidade">Yoga e Meditação</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 anos na Vortex</span>
                        </div>
                        <p>Instrutora de Yoga com 10 anos de experiência, especializada em Hatha e Vinyasa Yoga. Certificada internacionalmente em Yoga Terapêutico.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 4 -->
                <div class="card-professor" data-categoria="pilates">
                    <div class="card-imagem">
                        <img src="https://img.freepik.com/fotos-gratis/pessoa-de-origem-indiana-se-divertindo_23-2150285283.jpg" alt="Professora Juliana">
                    </div>
                    <div class="card-conteudo">
                        <h3>Juliana Martins</h3>
                        <span class="especialidade">Pilates e Alongamento</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>2 anos na Vortex</span>
                        </div>
                        <p>Instrutora de Pilates com 8 anos de experiência, especializada em Pilates Solo e com Aparelhos. Formada in Fisioterapia com especialização em Pilates.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 5 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="https://www3.al.sp.gov.br/repositorio/deputadoPortal/fotos/20230315-170849-id=1649-PEQ.jpeg" alt="Professor Ricardo">
                    </div>
                    <div class="card-conteudo">
                        <h3>Ricardo Almeida</h3>
                        <span class="especialidade">Treino Funcional e CrossFit</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>11 meses na Vortex</span>
                        </div>
                        <p>Especialista em treinamento funcional e preparação física. Certificado em CrossFit Level 2 e treinamento de alta intensidade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 6 -->
                <div class="card-professor" data-categoria="musculacao">
                    <div class="card-imagem">
                        <img src="https://somos.ufmg.br/img/fotos/6143949280366757.jpg" alt="Professora Patricia">
                    </div>
                    <div class="card-conteudo">
                        <h3>Patrícia Santos</h3>
                        <span class="especialidade">Musculação Feminina</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>2 anos na Vortex</span>
                        </div>
                        <p>Especialista em treinamento feminino e reabilitação de lesões. Formada em Educação Física com mestrado em Biomecânica.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 7 -->
                <div class="card-professor" data-categoria="danca">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professor Carlos">
                    </div>
                    <div class="card-conteudo">
                        <h3>Carlos Mendes</h3>
                        <span class="especialidade">Dança e Zumba</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 anos na Vortex</span>
                        </div>
                        <p>Especialista em dança fitness e Zumba. Coreógrafo com experiência em diversos estilos de dança e atividades aeróbicas em grupo.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 8 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="https://www.insper.edu.br/content/dam/insper-portal/imagens/Docentes/Patr%C3%ADcia%20Valente%20016bx.jpg" alt="Professora Fernanda">
                    </div>
                    <div class="card-conteudo">
                        <h3>Fernanda Lima</h3>
                        <span class="especialidade">Funcional e HIIT</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>2 anos na Vortex</span>
                        </div>
                        <p>Especialista em treinamento funcional e HIIT. Certificada em nutrição esportiva e preparação física para atletas amadores.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 9 -->
                <div class="card-professor" data-categoria="yoga">
                    <div class="card-imagem">
                        <img src="professor4.jpg" alt="Professora Sofia">
                    </div>
                    <div class="card-conteudo">
                        <h3>Sofia Rodrigues</h3>
                        <span class="especialidade">Yoga e Pilates</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>3 anos na Vortex</span>
                        </div>
                        <p>Instrutora de Yoga e Pilates com formação internacional. Especializada em yoga para gestantes e terceira idade.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 10 -->
                <div class="card-professor" data-categoria="musculacao">
                    <div class="card-imagem">
                        <img src="https://cdn.vnda.com.br/cobogo/2021/10/29/19_10_3_309_site_autor_PatrickPessoa.jpg?v=1747746728" alt="Professor Bruno">
                    </div>
                    <div class="card-conteudo">
                        <h3>Bruno Costa</h3>
                        <span class="especialidade">Musculação Avançada</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 anos na Vortex</span>
                        </div>
                        <p>Especialista em treinamento avançado de hipertrofia e preparação para competições. Formado em Educação Física com especialização em Treinamento de Força.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 11 -->
                <div class="card-professor" data-categoria="pilates">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professor Diego">
                    </div>
                    <div class="card-conteudo">
                        <h3>Diego Alves</h3>
                        <span class="especialidade">Pilates e Reabilitação</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>5 Meses na Vortex</span>
                        </div>
                        <p>Fisioterapeuta especializado em Pilates Clínico e reabilitação de lesões musculoesqueléticas. Certificado em Pilates Avançado e Terapêutico.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 12 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="https://media.istockphoto.com/id/1089633230/fr/photo/lunettes-fille-en-blanc.jpg?s=612x612&w=0&k=20&c=jPH-zNl4orN9fvrDPundGf7sXJ5t4uDUCQlI6Fnv_QY=" alt="Professora Camila">
                    </div>
                    <div class="card-conteudo">
                        <h3>Camila Rocha</h3>
                        <span class="especialidade">Funcional e Condicionamento</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>2 anos na Vortex</span>
                        </div>
                        <p>Especialista em treinamento funcional e condicionamento físico geral. Certificada em treinamento em suspensão e exercícios ao ar livre.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 13 -->
                <div class="card-professor" data-categoria="danca">
                    <div class="card-imagem">
                        <img src="https://www.gizmodo.com.br/app/uploads/2025/01/pessoa-atraente.png" alt="Professora Larissa">
                    </div>
                    <div class="card-conteudo">
                        <h3>Larissa Moura</h3>
                        <span class="especialidade">Dança e Ritmos</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>9 Meses na Vortex</span>
                        </div>
                        <p>Bailarina profissional com especialização em danças latinas e ritmos brasileiros. Coreógrafa de fitness dance com certificação internacional.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 14 -->
                <div class="card-professor" data-categoria="musculacao">
                    <div class="card-imagem">
                        <img src="professor5.jpg" alt="Professor Thiago">
                    </div>
                    <div class="card-conteudo">
                        <h3>Thiago Mendonça</h3>
                        <span class="especialidade">Musculação e Powerlifting</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>1 anos na Vortex</span>
                        </div>
                        <p>Especialista em treinamento de força e powerlifting. Campeão estadual de levantamento básico com experiência em preparação de atletas.</p>
                        <div class="redes-sociais">
                            <a href="#" class="rede-social"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="rede-social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Professor 15 -->
                <div class="card-professor" data-categoria="funcional">
                    <div class="card-imagem">
                        <img src="https://img.freepik.com/fotos-gratis/vista-frontal-do-homem-bonito_23-2148780802.jpg" alt="Professora Larissa">
                    </div>
                    <div class="card-conteudo">
                        <h3>paula Silva</h3>
                        <span class="especialidade">exercicios de resistencia</span>
                        <div class="experiencia">
                            <i class="fas fa-calendar-alt"></i>
                            <span>4 Meses na Vortex</span>
                        </div>
                        <p>Especializado em transformar o potencial físico em resultados reais através de exercícios de resistência.Planejamento de treinos de força para hipertrofia, performance atlética e saúde geral.</p>
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
            <p>Agende uma aula experimental gratuita e conheça de perto a metodologia e qualidade dos profissionais Vortex</p>
            <a href="#" class="btn-grande"><i class="fas fa-calendar-check"></i> Agendar Aula Experimental</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Vortex. Todos os direitos reservados.</p>
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