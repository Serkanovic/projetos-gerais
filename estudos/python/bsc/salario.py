#quanto ganha por hora e o numero de horas trabalhadas no mês
#calcule e mostre o total do seu salário no referido mês

horaGanho = float(input("Quanto você ganha por hora trabalhada? "))
horaFeita = int(input("Quantas horas você trabalhou no mês? "))
salario = float(horaGanho * horaFeita)

print(f"O salário nesse mês será de: R${salario}")