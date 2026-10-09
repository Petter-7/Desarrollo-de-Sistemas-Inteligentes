
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