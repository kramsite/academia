<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores - Academia FitLife</title>
    <link rel="stylesheet" href="prof.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                        <img src="professora.png" alt="Professor Marcos">
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
                
                <!-- Professor 5 -->
                <div class="card-professor" data-categoria="musculacao">
                    <div class="card-imagem">
                        <img src="https://images.unsplash.com/photo-1594381898411-846e7d193883?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Professora Patricia">
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