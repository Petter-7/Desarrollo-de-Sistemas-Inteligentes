

## **ACTIVIDAD 2.1
### **Detección de fraude bancario**

    - T (Tarea):** identificar si una transacción bancaria es fraudulenta o legítima.
    - P (Medición de desempeño):** porcentaje de fraudes detectados correctamente, precisión, sensibilidad y cantidad de falsos positivos.
    - E (Experiencia):** historial de transacciones anteriores etiquetadas como       fraudulentas o legítimas.

### **Mantenimiento predictivo de maquinaria**

    - T (Tarea):** predecir si una máquina o componente presentará una falla próximamente.
    - P (Medición de desempeño):** porcentaje de fallas predichas correctamente y error entre el tiempo estimado de falla y el tiempo real.
    - E (Experiencia):** registros históricos de sensores, temperatura, vibraciones, horas de funcionamiento y fallas anteriores.


## **ACTIVIDAD 2.2

- **SUPERVISADO:** Es un modelo que aprende usando datos donde ya tiene una respuesta correcta 
- **NO SUPERVISADO:** Al contrario del anterior los datos no tienen respuestas correctas ni etiquetas 
- **POR REFUERZO:** En este método se aprende por prueba y error


## ACTIVIDAD 2.3

- **Pandas:** Es una biblioteca de código abierto para Python que permite organizar, limpiar, transformar y preparar datos de manera sencilla.

- **Matplotlib:** Es una biblioteca de Python utilizada para crear gráficas y representar datos visualmente, lo que facilita el análisis de información y resultados de modelos de Machine Learning.

- **Scikit-learn:** Es una biblioteca que permite desarrollar y aplicar distintos algoritmos de Machine Learning de forma práctica.

- **Google Colab:** Es una plataforma en línea que permite escribir y ejecutar código de Python directamente desde un navegador, sin necesidad de instalar programas adicionales.

- **Árbol de decisión:** Es un algoritmo de Machine Learning que organiza decisiones mediante una estructura similar a un diagrama de flujo, utilizando diferentes reglas para llegar a un resultado.

- **Matriz de confusión:** Es una tabla de dos dimensiones que sirve para analizar qué tan bien funciona un modelo de clasificación, comparando sus predicciones con los resultados reales.

- **Sobreajuste:** Se presenta cuando un modelo aprende demasiado específicamente los datos utilizados durante el entrenamiento y no logra identificar correctamente el patrón general.

- **Falso positivo:** Ocurre cuando un sistema indica que detectó algo, aunque en realidad ese resultado es incorrecto.

- **Falso negativo:** Sucede cuando el sistema indica que no detectó algo, aunque en realidad sí estaba presente.


## **ACTIVIDAD 2.4**

- ## Árbol de decisión

    ***Definición:***  
    Es un algoritmo de aprendizaje supervisado que puede utilizarse para clasificación y regresión. Su objetivo es predecir un resultado mediante reglas de decisión obtenidas a partir de las características de los datos (Scikit-learn Developers, 2026).

    ***Cómo funciona:***  
    El algoritmo divide los datos mediante preguntas o condiciones. Cada división genera diferentes ramas y el proceso continúa hasta llegar a una hoja, donde se obtiene la clasificación o predicción final (Scikit-learn Developers, 2026). 

- ## Regresión logística

    ***Definición:****  
    La regresión logística es un método utilizado principalmente para problemas de clasificación. Permite estimar la probabilidad de que un dato pertenezca a una determinada categoría (Scikit-learn Developers, 2026). 

    ***Cómo funciona:***  
    El modelo analiza las variables de entrada y obtiene una probabilidad para cada posible categoría. Posteriormente, utiliza esas probabilidades para determinar a qué clase pertenece el dato (Scikit-learn Developers, 2026). 

- ## K vecinos más cercanos (K-NN)

    ***Definición:***  
    K-NN es un método basado en vecinos cercanos que puede utilizarse para tareas supervisadas de clasificación y regresión. La predicción depende de los datos de entrenamiento que se encuentran más próximos al nuevo ejemplo (Scikit-learn Developers, 2026). 

    ***Cómo funciona:***  
    Primero se selecciona un valor **K**, que representa el número de vecinos que serán considerados. Después se calcula qué datos se encuentran más cerca del nuevo elemento y se utilizan sus resultados para realizar la clasificación o predicción (Scikit-learn Developers, 2026). 

- ## Naive Bayes

    ***Definición:***  
    Naive Bayes es un conjunto de algoritmos de aprendizaje supervisado basados en el teorema de Bayes. Estos algoritmos utilizan la suposición de que las características son condicionalmente independientes entre sí cuando se conoce la clase (Scikit-learn Developers, 2026).

    ***Cómo funciona:***  
    Calcula la probabilidad de que un ejemplo pertenezca a cada una de las categorías disponibles. Después compara esas probabilidades y selecciona la categoría con el valor más alto como resultado de la clasificación (Scikit-learn Developers, 2026).

- ## Máquina de Vectores de Soporte (SVM)

    ***Definición:***  
    Las máquinas de vectores de soporte son métodos de aprendizaje supervisado utilizados para clasificación, regresión y detección de valores atípicos (Scikit-learn Developers, 2026). 

    ***Cómo funciona:***  
    SVM busca crear un hiperplano que separe las distintas categorías. Intenta encontrar una frontera que tenga la mayor distancia posible respecto a los ejemplos más cercanos de cada clase. Esos ejemplos se conocen como **vectores de soporte** (Scikit-learn Developers, 2026).

- ## Bosque aleatorio

    ***Definición:****  
    El bosque aleatorio o _Random Forest_ es un método de aprendizaje automático basado en la combinación de múltiples árboles de decisión. Forma parte de los métodos de conjunto o _ensemble_ (Scikit-learn Developers, 2026).

    ***Cómo funciona:***  
    El algoritmo construye varios árboles introduciendo aleatoriedad durante su entrenamiento. Cada árbol realiza una predicción y posteriormente los resultados de todos los árboles se combinan para obtener la respuesta final (Scikit-learn Developers, 2026).

- ## Red neuronal

    ***Definición:***  
    Una red neuronal es un modelo formado por unidades interconectadas organizadas en capas. Un ejemplo es el perceptrón multicapa o **MLP**, que puede aprender relaciones no lineales para resolver problemas de clasificación o regresión (Scikit-learn Developers, 2026). 

    ***Cómo funciona:***  
    Los datos entran por una capa de entrada y pasan por una o más capas ocultas antes de llegar a la capa de salida. Durante el entrenamiento, el modelo aprende una función ajustando sus parámetros para relacionar las características de entrada con el resultado esperado (Scikit-learn Developers, 2026). 

- ## Referencias APA 7

    Scikit-learn Developers. (2026). _Decision trees_. Scikit-learn. [https://scikit-learn.org/stable/modules/tree.html](https://scikit-learn.org/stable/modules/tree.html)

    Scikit-learn Developers. (2026). _LogisticRegression_. Scikit-learn. [https://scikit-learn.org/stable/modules/generated/sklearn.linear_model.LogisticRegression.html](https://scikit-learn.org/stable/modules/generated/sklearn.linear_model.LogisticRegression.html?utm_source=chatgpt.com)

    Scikit-learn Developers. (2026). _Nearest neighbors_. Scikit-learn. [https://scikit-learn.org/stable/modules/neighbors.html](https://scikit-learn.org/stable/modules/neighbors.html?utm_source=chatgpt.com)

    Scikit-learn Developers. (2026). _Naive Bayes_. Scikit-learn. [https://scikit-learn.org/stable/modules/naive_bayes.html](https://scikit-learn.org/stable/modules/naive_bayes.html?utm_source=chatgpt.com)

    Scikit-learn Developers. (2026). _Support vector machines_. Scikit-learn. [https://scikit-learn.org/stable/modules/svm.html](https://scikit-learn.org/stable/modules/svm.html)

    Scikit-learn Developers. (2026). _Ensemble methods: Random forests and other randomized tree ensembles_. Scikit-learn. [https://scikit-learn.org/stable/modules/ensemble.html](https://scikit-learn.org/stable/modules/ensemble.html)

    Scikit-learn Developers. (2026). _Neural network models (supervised)_. Scikit-learn. [https://scikit-learn.org/stable/modules/neural_networks_supervised.html](https://scikit-learn.org/stable/modules/neural_networks_supervised.html?utm_source=chatgpt.com)