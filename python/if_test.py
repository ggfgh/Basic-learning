score=int(input("please input your score:"))
if score >= 0 and score <= 59:
    print("D")
elif score > 60 and score < 69:
    print("C")
elif score > 70 and score < 79:
    print("B")
elif score > 80 and score < 89:
    print("A")
elif score >= 90:
    print("A+")
