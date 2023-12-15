create database zek_blog_articles;
use zek_blog_articles;
create table users(
user_id int primary key auto_increment,
user_name varchar(200),
user_email varchar(200),
user_password int,
user_admin BIT DEFAULT 0    
);
create table articles(
article_id int primary key auto_increment,
article_name varchar(200),
article_description varchar (2000),
article_content MEDIUMTEXT,
article_date DATETIME
);

insert into users (user_name, user_email, user_password, user_admin) values
('Zek', 'zek@test.com', 1234, 1);

insert into articles( article_name, article_description, article_content, article_date) values 
('Título: Desvendando as IAs: Uma Jornada no Mundo da IA Gerado por IA para Teste',
 'Descrição: Explore as nuances das Inteligências Artificiais e seus impactos no futuro da tecnologia, gerado por IA para teste.',
 'As Inteligências Artificiais (IAs) revolucionam o cenário tecnológico, com o ChatGPT, uma IA avançada gerado por IA para teste, destacando-se na compreensão e geração de linguagem.

No cerne das IAs está o aprendizado de máquina, capacitando o ChatGPT a adaptar-se, compreender contextos e gerar conteúdo de forma coerente, gerado por IA para teste.

Apesar dos desafios éticos, as IAs, como o ChatGPT, impulsionam a inovação, transformando setores e redefinindo a interação humana com a tecnologia, gerado por IA para teste.

Em resumo, as IAs moldam o futuro da interação homem-máquina, exemplificado pelo ChatGPT, gerado por IA para teste, revelando um horizonte promissor de transformação tecnológica.',
 NOW()),
 ('Educação Online e o Impacto das IAs',
        'Descubra como as Inteligências Artificiais estão transformando a educação online, gerado por IA para teste.',
        'As IAs estão revolucionando o campo da educação online. Com avanços como o ChatGPT, uma IA avançada gerada por IA para teste, a compreensão e geração de conteúdo alcançam novos patamares.

O aprendizado de máquina, o cerne das IAs, capacita plataformas educacionais a se adaptarem dinamicamente, compreenderem contextos e oferecerem uma experiência de aprendizado personalizada, gerado por IA para teste.

Apesar das discussões éticas, as IAs, como o ChatGPT, desempenham um papel crucial na inovação educacional, redefinindo a forma como os alunos interagem com a tecnologia, gerado por IA para teste.

Em resumo, as IAs moldam o futuro da educação online, exemplificado pelo ChatGPT, gerado por IA para teste, indicando uma transformação promissora na forma como aprendemos.', NOW()),
('Saúde Digital e o Avanço das IAs',
        'Explore como as Inteligências Artificiais estão impactando a saúde digital, gerado por IA para teste.',
        'O cenário da saúde digital está sendo transformado pelas Inteligências Artificiais. Com o ChatGPT, uma IA avançada gerada por IA para teste, destacando-se na interpretação e geração de informações médicas.

O aprendizado de máquina, fundamental para as IAs, permite que o ChatGPT se adapte dinamicamente, compreenda contextos médicos complexos e forneça insights valiosos, gerado por IA para teste.

Apesar dos desafios éticos, as IAs, como o ChatGPT, impulsionam a inovação na área da saúde, transformando a maneira como os profissionais de saúde interagem com a tecnologia, gerado por IA para teste.

Em resumo, as IAs moldam o futuro da saúde digital, exemplificado pelo ChatGPT, gerado por IA para teste, indicando um horizonte promissor para avanços na medicina e cuidados com a saúde.', NOW()),
('Carros Autônomos e a Revolução das IAs',
        'Descubra como as Inteligências Artificiais estão revolucionando a indústria de carros autônomos, gerado por IA para teste.',
        'A indústria de carros autônomos está passando por uma revolução graças às Inteligências Artificiais. Com o ChatGPT, uma IA avançada gerada por IA para teste, destacando-se na compreensão de ambientes de direção complexos.

O aprendizado de máquina, essencial para as IAs, capacita o ChatGPT a se adaptar a situações de tráfego dinâmicas, compreender contextos de direção e melhorar continuamente, gerado por IA para teste.

Apesar das questões éticas e regulamentações, as IAs, como o ChatGPT, impulsionam a inovação na indústria automotiva, redefinindo a interação entre humanos e veículos autônomos, gerado por IA para teste.

Em resumo, as IAs moldam o futuro dos carros autônomos, exemplificado pelo ChatGPT, gerado por IA para teste, indicando uma transformação significativa na mobilidade urbana.', NOW());
 


select * from users WHERE user_email = 'zek@test.com' AND user_password = '1234';
select * from articles;
select * from articles order by article_date;
