Entidade Alunos:
 - Um aluno deve possuir uma cidade de nascimento (muitos-para-um com Cidades)
 - Um aluno pode estar matriculado em um ou mais cursos (muitos-para-muitos com Cursos)
 - Um aluno pode cursar uma ou mais disciplinas (muitos-para-muitos com Disciplinas)
 - Um aluno pode ter várias chamadas escolares (representam aulas) (muitos-para-muitos com Chamadas Escolares)

Entidade Professores:
 - Um professor deve possuir uma cidade de nascimento (muitos-para-um com Cidades)
 - Um professor pode ministrar uma ou mais disciplinas (muitos-para-muitos com Disciplinas)

Entidade Disciplinas:
 - Uma disciplinas pode ter em vários cursos= (muitos-para-muitos com Cursos)
 - Uma disciplina pode ser cursada por vários alunos (muitos-para-muitos com Alunos)
 - Uma disciplina pode ser ministrada por um ou mais professores (muitos-para-muitos com Professores)
 - Uma disciplina pode ser lecionada em uma ou mais salas (muitos-para-muitos com Salas)

Entidade Cursos:
 - Um curso pode ter várias disciplinas (muitos-para-muitos com Disciplinas)
 - Um aluno pode estar matriculado em um ou mais cursos (muitos-para-muitos com Alunos)

Entidade Salas:
 - Uma sala pode receber uma ou mais aulas

Entidade Chamadas Escolares:
 - Uma chamada escolar está vinculada a apenas 1 disciplina, 1 sala e 1 data.
 - Uma sala pode ter várias chamadas escolares ao longo do período letivo (representam diferentes aulas)
 - Uma chamada escolar pode ter vários alunos(muitos-para-muitos com Alunos)