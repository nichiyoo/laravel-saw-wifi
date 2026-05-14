## JSS Free Wi-Fi Placement DSS

A Decision Support System for prioritising the placement of Jogja Smart Service (JSS) free Wi-Fi access points across the 14 kemantren of Yogyakarta City, built with Laravel and the SAW (Simple Additive Weighting) algorithm.

## Background

The City of Yogyakarta provides free public Wi-Fi through its Jogja Smart Service programme. With limited infrastructure budget, the city needs a data-driven way to decide which kemantren should receive new access points first. This system ranks all 14 kemantren by priority using four criteria: population density, number of existing JSS Wi-Fi users, number of active access points, and community self-funding collected.

## What is SAW?

Simple Additive Weighting (SAW) is one of the most widely used methods in Multi-Attribute Decision Making (MADM). The core idea is straightforward — given a set of candidates and a set of weighted criteria, SAW finds the best candidate by scoring each one against every criterion and summing the results.

The process works in three steps. First, each raw criterion value is normalised to a 0–1 scale relative to the best value in its column — benefit criteria (where higher is better) are divided by the column maximum, and cost criteria (where lower is better) use the column minimum divided by the value. Second, each normalised value is multiplied by its criterion weight. Third, those weighted values are summed into a single preference score per candidate. The candidate with the highest score is the top priority.

SAW is chosen for this problem because it is transparent, easy to audit, and well-suited to cases where criteria carry different levels of importance — which is exactly the case here, where the number of existing access points (infrastructure gap) is weighted more heavily than population density.

## Criteria

| Code | Criterion                                | Type    | Weight |
| ---- | ---------------------------------------- | ------- | ------ |
| C1   | Population density (jiwa/km²)            | Benefit | 15%    |
| C2   | Number of JSS Wi-Fi users                | Benefit | 25%    |
| C3   | Number of active JSS Wi-Fi access points | Cost    | 35%    |
| C4   | Community self-funding (swadaya)         | Cost    | 25%    |

Benefit criteria reward kemantren with higher values. Cost criteria reward kemantren with lower values — a kemantren with fewer existing access points or less collected funding is considered more in need of support.

## References

- Fishburn, P. C. (1967). Additive utilities with incomplete product set.
- Kusumadewi, S. et al. (2006). _Fuzzy Multi-Attribute Decision Making_. Graha Ilmu.
- Satu Data Indonesia — [data.go.id](https://data.go.id)
