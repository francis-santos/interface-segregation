## Visão Geral
Este código exemplifica o uso do princípio de segregação de interfaces (ISP) em PHP. Ele utiliza interfaces específicas para cada tipo de operação, permitindo que as classes implementem apenas as interfaces relevantes para elas. Isso promove um design mais coeso e flexível, onde as classes são responsáveis apenas pelas operações que precisam realizar.

## Padrão de Segregação de Interface (ISP)
O Padrão de Segregação de Interface é uma das diretrizes do princípio SOLID que afirma que uma classe não deve ser forçada a depender de métodos que ela não utiliza. O código exemplifica o ISP ao dividir as responsabilidades em interfaces distintas, permitindo que as classes implementem apenas o que precisam.

### Como o código implementa o ISP:
- `IFromArray`: Define um método para criar um DTO a partir de uma matriz de dados.
- `IFromRequest`: Especifica um método para criar um DTO a partir de um objeto de requisição.
- `IToDTO`: Descreve um método para converter um objeto de modelo em um DTO.
- `IToModel`: Declara um método para converter um DTO em um objeto de modelo.

Com essa abordagem, as classes podem optar por implementar apenas as interfaces relevantes para suas funcionalidades, evitando a dependência de métodos que não são necessários.

## Princípio SOLID
O princípio SOLID é um conjunto de cinco princípios de design de software que visam criar sistemas mais compreensíveis, flexíveis e fáceis de manter. O código demonstra os princípios SOLID, principalmente o princípio da responsabilidade única (SRP) e o princípio da inversão de dependência (DIP).

### Princípio da Responsabilidade Única (SRP)
O SRP afirma que uma classe deve ter apenas uma razão para mudar. No código fornecido, cada classe e interface tem uma responsabilidade única e claramente definida. Por exemplo:
- `User`: Responsável por representar um usuário e encapsular seus dados.
- `Role`: Responsável por representar um papel (role) e encapsular seus dados.
- Interfaces: Cada interface define uma única operação específica, como converter de um tipo para outro.

### Princípio da Inversão de Dependência (DIP)
O DIP sugere que as classes de alto nível não devem depender de classes de baixo nível, mas sim de abstrações. O código segue este princípio ao depender de interfaces em vez de implementações concretas. Por exemplo:
- As classes `UserDTO` e `RoleDTO` dependem das interfaces `IFromArray`, `IFromRequest`, `IToDTO`, `IToModel`, em vez de dependerem de implementações específicas.
- Isso torna o código mais flexível, pois as implementações concretas podem ser alteradas sem afetar as classes que as utilizam.

Em resumo, o código demonstra uma implementação sólida dos princípios SOLID, com especial ênfase no princípio de segregação de interface (ISP), permitindo uma estrutura flexível e coesa que segue as melhores práticas de design de software.