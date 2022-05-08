count=0
for i in range(int(input())):
    y=input()
    r=y.index('r')
    R=y.index('R')
    b=y.index('b')
    B=y.index('B')
    g=y.index('g')
    G=y.index('G')
    if r<R and b<B and g<G:
        print('Yes')

    else:
        print('NO')
