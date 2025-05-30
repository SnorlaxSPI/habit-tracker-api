# Habit Tracker Api

Tabela guardar os nossos hábitos

// Tabelas: Inglês e no plural
Tabela: Habits
Model: Habit => Representação de um Registro de Tabela
-> user_id : foreign id
-> title : string

Tabela: habit_logs
model: HabitLog => Colocar o dia que completamos aquele hábito
-> habit_id : foreign id
-> completed_at : datetime

Tabela: users
Model: user
