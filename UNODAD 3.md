
**Algoritmos de búsqueda**

Son procedimientos que exploran distintas posibilidades para encontrar un camino desde una situación inicial hasta una meta.

1. **Problema de búsqueda:** situación que requiere encontrar una secuencia de acciones para alcanzar un objetivo.
2. **Espacio de estados:** conjunto de situaciones posibles dentro del problema.
3. **Estado inicial:** punto desde donde comienza la búsqueda.
4. **Acciones:** movimientos u operaciones permitidas en cada estado.
5. **Modelo de transición:** indica qué estado resulta al ejecutar una acción.
6. **Prueba de meta:** comprueba si se alcanzó el objetivo.
7. **Costo del camino:** suma de los costos de las acciones realizadas.
8. **Solución:** secuencia de acciones que conecta el estado inicial con una meta.
9. **Frontera:** conjunto de nodos descubiertos que todavía están pendientes de explorar.
10. **Nodo:** registro que contiene un estado e información de su recorrido, como su padre, acción y costo acumulado.
11. **Agente de resolución de problemas:** sistema que establece un objetivo, formula un problema, busca una solución y ejecuta las acciones correspondientes.

**Ejemplo: un robot que lleva material a un salón**

El robot comienza en la entrada de la universidad y debe llegar al laboratorio. Los lugares donde puede estar forman su espacio de estados; desplazarse por los pasillos son sus acciones. Su modelo de transición indica a qué lugar llega con cada movimiento y su prueba de meta verifica si ya está en el laboratorio. El costo puede medirse en metros recorridos.

**Búsqueda no informada o ciega**

Explora utilizando la información del problema, sin una estimación de cuánto falta para llegar a la meta. Incluye estos métodos:

|Algoritmo|Cómo funciona|Estructura utilizada|
|---|---|---|
|**Búsqueda en amplitud (BFS)**|Revisa primero los nodos más cercanos al inicio, avanzando por niveles.|Cola|
|**Búsqueda en profundidad (DFS)**|Sigue una rama hasta donde puede; después retrocede para explorar otras.|Pila o recursión|
|**Búsqueda de costo uniforme (UCS)**|Explora primero el nodo con menor costo acumulado desde el inicio.|Cola de prioridad|

La amplitud encuentra una solución con menos pasos; la profundidad depende del orden de exploración; el costo uniforme busca minimizar el costo total.

**Cola y pila**

- **Cola (FIFO):** el primero que entra es el primero que sale, como una fila para comprar boletos.
- **Pila (LIFO):** el último que entra es el primero que sale, como una pila de platos.
- **Cola de prioridad:** atiende primero al elemento con mayor prioridad. En costo uniforme, corresponde al menor costo acumulado.

**Criterios para evaluar una búsqueda**

|Criterio|Significado|
|---|---|
|**Completitud**|Garantía de encontrar una solución si existe.|
|**Optimalidad**|Garantía de encontrar una solución de menor costo.|
|**Complejidad en tiempo**|Cómo aumenta el trabajo necesario al crecer el problema.|
|**Complejidad en espacio**|Cómo aumenta la memoria necesaria durante la búsqueda.|

BFS es completo con ramificación finita y óptimo si los pasos cuestan lo mismo. DFS no es completo en general ni garantiza optimalidad. UCS es completo con ramificación finita y costos de paso acotados por un mínimo positivo; bajo esas condiciones también es óptimo.
**Ejemplo para comparar los algoritmos**

Supongamos que existen tres rutas al laboratorio:

|Ruta|Número de movimientos|Distancia total|
|---|---|---|
|Entrada → Patio → Laboratorio|2|100 metros|
|Entrada → Biblioteca → Pasillo → Laboratorio|3|60 metros|
|Entrada → Cafetería → Escaleras → Pasillo → Laboratorio|4|140 metros|

- **Amplitud:** elegiría la ruta del patio porque requiere menos movimientos.
- **Profundidad:** podría encontrar primero cualquiera de las rutas, según el orden en que explore las ramas.
- **Costo uniforme:** elegiría la ruta de la biblioteca porque tiene la menor distancia total, si cada tramo usa los metros como costo.

## *ACTIVIDAD 3.1*


![[Pasted image 20261008181751.png]]

Esta imagen muestra la **búsqueda en amplitud (BFS)**, que explora las casillas por niveles: primero las que están a un movimiento del inicio, después a dos y así sucesivamente, hasta encontrar la meta.

Los elementos que aparecen son:

- **Cuadro verde fuerte:** punto de inicio.
- **Cuadro naranja:** destino o meta.
- **Línea amarilla:** camino encontrado.
- **Zona celeste:** casillas que ya se exploraron.
- **Borde verde claro:** frontera de búsqueda; casillas descubiertas pendientes de explorar.
- **Casillas blancas:** zonas que no fue necesario alcanzar.

Aunque el destino está a la derecha, **BFS explora en todas las direcciones**, porque no utiliza una estimación que lo oriente hacia la meta. Por eso revisa una zona grande antes de terminar.

Los resultados mostrados son:

|Dato|Interpretación|
|---|---|
|**Length: 10**|El camino tiene una longitud de 10 unidades de la cuadrícula.|
|**Time: 0.6000 ms**|Tiempo de ejecución registrado por el simulador.|
|**Operations: 843**|Operaciones contabilizadas por el simulador durante la búsqueda.|

**Lo que demuestra:** BFS encuentra un camino con el menor número de movimientos, pero puede explorar muchas casillas para conseguirlo.

![[Pasted image 20261008182258.png]]

Esta imagen muestra la **búsqueda en amplitud bidireccional**, porque está activada la opción **“Bi-directional”**.

El algoritmo realiza dos búsquedas: una desde el **inicio verde** y otra desde la **meta naranja**. Ambas avanzan por niveles hasta encontrarse; entonces se unen sus recorridos para formar el camino amarillo.

- **Zonas celestes:** casillas exploradas desde ambos extremos.
- **Bordes verdes claros:** casillas descubiertas pendientes de explorar.
- **Línea amarilla:** ruta encontrada entre el inicio y la meta.

Las zonas tienen **forma de rombo** porque “Allow Diagonal” está desactivado: solo se permite avanzar arriba, abajo, izquierda y derecha.

|Resultado|Significado|
|---|---|
|**Longitud: 10**|El camino requiere 10 movimientos.|
|**Tiempo: 0.4000 ms**|Tiempo registrado en esta ejecución.|
|**Operaciones: 203**|Operaciones contabilizadas por el simulador.|

En la imagen anterior se registraron **843 operaciones** y aquí **203**, conservando la misma longitud del camino. La búsqueda desde ambos extremos ayuda a reducir la exploración, aunque también cambió la opción de diagonales, así que la diferencia no se debe únicamente a la búsqueda bidireccional.

![[Pasted image 20261008182433.png]]

Esta imagen muestra la **búsqueda en amplitud (BFS) desde un solo extremo y sin movimientos diagonales**.

El algoritmo comienza en el cuadro verde y explora por niveles hacia arriba, abajo, izquierda y derecha hasta alcanzar la meta naranja. Por eso, la zona explorada forma un **rombo alrededor del inicio**.

- **Celeste:** casillas exploradas.
- **Verde claro:** frontera de búsqueda, con casillas pendientes de explorar.
- **Amarillo:** camino encontrado, que es recto porque no hay obstáculos.

|Resultado|Valor|
|---|---|
|Longitud del camino|10 movimientos|
|Tiempo registrado|1.1000 ms|
|Operaciones contabilizadas|443|

Comparada con la imagen anterior, esta búsqueda realizó **443 operaciones frente a 203**. Al buscar únicamente desde el inicio, tuvo que explorar una región más grande; la bidireccional avanzaba desde ambos extremos hasta encontrarse. En ambos casos, el camino encontrado tiene **10 movimientos**.

![[Pasted image 20261008182604.png]]

Esta imagen muestra el **algoritmo de Dijkstra**, que explora primero las casillas con **menor costo acumulado desde el inicio**. Su objetivo es encontrar el camino de menor costo hasta la meta.

- **Cuadro verde intenso:** inicio.
- **Cuadro naranja:** meta.
- **Zona celeste:** casillas exploradas.
- **Verde claro:** frontera pendiente de explorar.
- **Línea amarilla:** camino encontrado.

La exploración tiene una **forma aproximadamente circular**: al considerar la distancia recorrida, los movimientos diagonales cuestan más que los horizontales o verticales. Dijkstra expande la búsqueda según ese costo, sin orientarse directamente hacia la meta.

|Resultado|Valor|
|---|---|
|Longitud del camino|10 unidades|
|Tiempo registrado|1.9000 ms|
|Operaciones contabilizadas|643|

Como no hay obstáculos y los puntos están en la misma fila, encuentra una **ruta recta de 10 unidades**.

La diferencia principal con **BFS** es que BFS prioriza el menor número de movimientos, mientras que **Dijkstra prioriza el menor costo total**. Esto resulta útil cuando los movimientos tienen costos diferentes.

![[Pasted image 20261008183034.png]]

Esta imagen muestra **Dijkstra bidireccional sin movimientos diagonales**.

La búsqueda avanza desde dos puntos: el **inicio verde** y la **meta naranja**. En cada lado se priorizan las casillas con menor costo acumulado desde su respectivo extremo, hasta conectar ambos recorridos.

- **Zonas celestes:** casillas exploradas por ambas búsquedas.
- **Verde claro:** frontera de casillas pendientes de explorar.
- **Línea amarilla:** camino encontrado entre los dos puntos.

|Resultado|Valor|
|---|---|
|Longitud del camino|10 unidades|
|Tiempo registrado|0.5000 ms|
|Operaciones contabilizadas|175|

En la imagen anterior, Dijkstra registró **643 operaciones**; aquí fueron **175**, con la misma longitud de camino. Se exploró menos terreno, aunque cambiaron dos condiciones: se activó la búsqueda bidireccional y se desactivaron las diagonales.

En este caso, como todos los movimientos permitidos tienen el mismo costo, **Dijkstra se comporta de manera similar a BFS**, aunque el orden de exploración puede variar.

![[Pasted image 20261008183234.png]]

Esta imagen muestra **Dijkstra desde un solo extremo y sin movimientos diagonales**.

El algoritmo parte del **cuadro verde** y explora primero las casillas con menor costo acumulado, hasta llegar a la **meta naranja**. Como solo puede moverse arriba, abajo, izquierda y derecha, la exploración forma aproximadamente un **rombo**.

- **Celeste:** casillas exploradas.
- **Verde claro:** frontera pendiente de explorar.
- **Línea amarilla:** camino encontrado, recto porque no hay obstáculos.

|Resultado|Valor|
|---|---|
|Longitud del camino|10 unidades|
|Tiempo registrado|1.2000 ms|
|Operaciones contabilizadas|483|

En la imagen anterior, **Dijkstra bidireccional realizó 175 operaciones**; aquí fueron **483**. Al buscar solamente desde el inicio, explora una región más grande antes de alcanzar la meta. Ambos encontraron un camino de **10 unidades**.